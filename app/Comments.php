<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
  protected $table = 'comments';
  protected $fillable = ['commentDesc','validity','farmId','userId'];
  protected $primaryKey = 'id';
  public $timestamps = true;
}
