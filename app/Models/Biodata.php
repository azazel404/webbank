<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Biodata extends Model
{

  // protected $fillable = [
  //     'nik', 'nama', 'no_hp','jenis_kelamin','cover','jabatan','user_id'
  // ];

  protected $guarded = ['id'];

  protected $hidden = [];

  public function user(){
    return $this->belongsTo('App\Models\User');
  }
}
