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
            'file_id' => $this->file_id,
            'file_name' => $this->file_name,
            'user_name' => $this->user_name,
            'user_id' => $this->user_id,
            'file_path' => $this->file_path,
            'file_extension' => $this->file_extension,
            'file_size' => $this->file_size,
            'notes' =>$this->notes,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
        ];
    }

    public function searchableAs()
    {
        return 'files';
    }

    public function searchableRouting()
    {
        return $this->user_id;
    }
    public function searchableWith()
    {
        return [];
    }
    public static function model()
{
    return new static();
}

}


