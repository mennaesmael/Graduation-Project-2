<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class files_table extends Model
{
    protected $table = 'files';
    protected $primaryKey = 'file_id';
    public $timestamps = false;
    use HasFactory;
}
