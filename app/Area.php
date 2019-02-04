<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
  protected $table = 'area';
  protected $fillable = ['tipo','distrito', 'descripcion', 'nombre','latitud','longitud'];
  public $timestamps = false;
}
