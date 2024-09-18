<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model
{
     //jika nama tablenya beda
     //protected $table = 'blog_post';
     //jika id berbeda dan bukan id tapi post_id
     //protected $primaryKey = 'post_id';
     use HasFactory;
     protected $fillable = ['title', 'author', 'slug', 'body'];
}
