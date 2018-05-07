<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Kelola extends Model
{

  protected $table = 'laporankelolas';

  // protected $fillable = [
  //   'title', 'content','cover','category','post_type','author'
  // ];
  protected $guarded = ['id'];


  protected $hidden = [];
}
