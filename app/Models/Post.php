<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Arr;

class Post extends Model
{
     //jika nama tablenya beda
     //protected $table = 'blog_post';
     //jika id berbeda dan bukan id tapi post_id 
     //protected $primaryKey = 'post_id';
     use HasFactory;
     protected $fillable = ['title', 'author', 'slug', 'body'];

     //eager loading
     protected $with = ['author', 'category'];

     public function author(): BelongsTo
     {
          return $this->belongsTo(User::class);
     }

     public function category(): BelongsTo
     {
          return $this->belongsTo(Category::class);
     }
}
