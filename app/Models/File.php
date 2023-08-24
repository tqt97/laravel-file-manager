<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path',
        'storage_path',
        'is_folder',
        'mine',
        'size',
        'uploaded_on_cloud',
        'created_by',
        'updated_by'
    ];
}
