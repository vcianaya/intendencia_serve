<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
  protected $table = 'zona';
  protected $fillable = ['nombre', 'distrito', 'latitud', 'longitud'];
  public $timestamps = false;
}
