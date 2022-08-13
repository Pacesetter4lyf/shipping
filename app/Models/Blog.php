<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillable = ['title', 'description', 'imageName', 'imageHash', 'slug', 'priority', 'readTimes', 'editedBy', 'imagePath', 'content', 'content2', 'content3'];
}

// id
// title
// description
// imageName
// imageHash
// slug
// priority
// readTimes
// editedBy

