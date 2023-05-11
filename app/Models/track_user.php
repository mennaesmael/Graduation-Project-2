<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Elastic\ScoutDriverPlus\Searchable;

class track_user extends Model
{
    use HasFactory  , Searchable;
    protected $table = 'track_users';
    protected $fillable = [
        'search_term',
        'action',
        'user_id',
        'created_at',
        'file_id',
        'updated_by',
    ];
    public $timestamps = false;

    // elasticsearch part

    public function toSearchableArray()
    {
        return [

            'user_id' => $this->user_id,
        ];
    }

    public function searchableAs()
    {
        return 'track_users';
    }



    public function searchableOptions()
    {
        return [
            'index' => 'track_users',
            'body' => [
                'mappings' => [
                    'properties' => [
                        'user_id' => [
                            'type' => 'integer'
                        ]
                    ]
                ]
            ]
        ];
    }

}

