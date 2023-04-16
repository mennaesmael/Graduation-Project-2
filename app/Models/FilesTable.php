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
    public function toSearchableArray()
    {
        return [
            'file_name' => $this->file_name,
            'user_name' => $this->user_name,
            'user_id' => $this->user_id,

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
        'type' => 'file',
        'mappings' => [
            'file' => [
                'properties' => [
                    'file_name' => [
                        'type' => 'text',
                        'analyzer' => 'arabic',
                    ],
                    'user_name' => [
                        'type' => 'text',
                        'analyzer' => 'arabic',
                    ],
                ],
            ],
        ],
    ];
}


}


