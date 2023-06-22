<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
    protected $table = 'teams';
    protected $fillable = ['memberName','degree','position','description',
                'memberPhoto','farmId'];
    protected $primaryKey = 'memberId';
    public $timestamps = true;
}
