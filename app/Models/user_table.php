<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_table extends Model implements Authenticatable
{
    use HasFactory, \Illuminate\Auth\Authenticatable;

    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'admin',
    ];
    public $timestamps = false;
}
