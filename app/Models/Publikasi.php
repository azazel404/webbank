<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Publikasi extends Model
{

  protected $table = 'laporanpublikasis';

  // protected $fillable = [
  //   'title', 'content','cover','category','post_type','author'
  // ];
  protected $guarded = ['id'];


  protected $hidden = [];
}
