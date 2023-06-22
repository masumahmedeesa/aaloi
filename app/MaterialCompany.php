<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialCompany extends Model
{
    protected $table = 'material_companies';
    protected $fillable = ['companyId','name','categories','subcategories','address',
                    'phone','email','website','estd','count','description','photo1'];
    protected $primaryKey = 'companyId';
    public $timestamps = true;

    public function materials(){
        return $this->hasMany(Materials::class, 'companyId');
    }
}
