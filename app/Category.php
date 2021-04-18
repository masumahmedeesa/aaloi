<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];
    protected $primaryKey = 'categoryId';
    public $timestamps = true;

    // protected $attributes = [
    //     'description' => '',
    //     'photo' => '',
    // ];
    
    public function subcategory()
    {
        return $this->hasMany(Subcategory::class,'categoryId');
    }
}
