<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = 'subcategories';
    protected $fillable = ['name','categoryId'];
    protected $primaryKey = 'subcategoryId';
    public $timestamps = true;

    // protected $attributes = [
    //     'description' => '',
    //     'photo' => '',
    // ];

    public function category()
    {
        return $this->belongsTo(Category::class,'categoryId');
    }
}
