<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Laravel\Scout\Searchable;
use Elastic\ScoutDriverPlus\Searchable;


class FilesTable extends Model
{
    use Searchable, HasFactory;


    protected $table = 'files';
    protected $primaryKey = 'file_id';
    public $timestamps = false;
    // elasticsearch part
    public function toSearchableArray()
    {
        return [
            'file_name' => $this->file_name,
            'user_name' => $this->user_name,
        ];
    }

    public function searchableAs()
    {
        return 'files';
    }

//     public function searchableRouting()
//     {
//         return $this->user_id;
//     }
//     public function searchableWith()
//     {
//         return [];
//     }
//     public static function model()
// {
//     return new static();
// }


public function searchableOptions()
{
    return [
        'index' => 'files',
        'body' => [
            'settings' => [
                'analysis' => [
                    'analyzer' => [
                        'custom_arabic_analyzer' => [
                            'type' => 'custom',
                            'tokenizer' => 'standard',
                            'filter' => [
                                'lowercase',
                                'arabic_normalization',
                                'arabic_stop',
                                'arabic_keywords',
                                'arabic_stemmer',
                            ],
                        ],
                    ],
                    'filter' => [
                        'arabic_stop' => [
                            'type' => 'stop',
                            'stopwords' => '_arabic_',
                        ],
                        'arabic_keywords' => [
                            'type' => 'keyword_marker',
                            'keywords' => ['ال'],
                        ],
                        'arabic_stemmer' => [
                            'type' => 'stemmer',
                            'language' => 'arabic',
                        ],
                    ],
                ],
            ],
            'mappings' => [
                'properties' => [
                    'file_name' => [
                        'type' => 'text',
                        'analyzer' => 'custom_arabic_analyzer',
                    ],
                    'user_name' => [
                        'type' => 'text',
                        'analyzer' => 'custom_arabic_analyzer',
                    ],
                ],
            ],
        ],
    ];

}


}


