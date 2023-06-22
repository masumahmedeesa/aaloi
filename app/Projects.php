<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = 'projects';
    protected $fillable = ['projectName','estdDate','location','description',
                'projectPhoto1','photo1Des','projectPhoto2','photo2Des',
                'projectPhoto3','photo3Des','projectPhoto4','photo4Des','farmId'];
    protected $primaryKey = 'projectId';
    public $timestamps = true;
}
