<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $table = 'allFarms';
    protected $fillable = ['farmName','farmType','farmManager','farmContactInformation',
                'farmPhone','farmEmail','farmAwards','farmTasks','farmTasksOn',
                'farmWebsite','farmFacebook','farmConsultant','farmEstd','farmPhoto'];
    protected $primaryKey = 'farmId';
    public $timestamps = true;
}
