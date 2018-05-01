<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Post extends Model
{



  // protected $fillable = [
  //   'title', 'content','cover','category','post_type','author'
  // ];
  protected $guarded = ['id'];


  protected $hidden = [];
}
