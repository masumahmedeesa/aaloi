<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
  protected $table = 'replies';
  protected $fillable = ['replyDesc','commentId','farmId','userId'];
  protected $primaryKey = 'replyId';
  public $timestamps = true;
}
