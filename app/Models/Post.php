<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'head',
        'body',
        'img',
        'category_id',
        'slider',
        'tags',
        'views',
        'draft',
        'files',
        'slug'
    ];


            

}
