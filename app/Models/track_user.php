<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class track_user extends Model
{
    use HasFactory;
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
}
