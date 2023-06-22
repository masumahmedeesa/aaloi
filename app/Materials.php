<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materials extends Model
{
    protected $table = 'materials';
    protected $fillable = ['materialId','name','description','price','avialable','photo1'];
    protected $primaryKey = 'materialId';
    public $timestamps = true;

    public function company(){
        return $this->belongsTo(MaterialCompany::class, 'companyId');
    }
}
