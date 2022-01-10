<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Brand extends Model
{
    protected $table = "brands";

    public function products()
    {
        return $this->hasMany(Product::class, 'brand_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_brands', 'brand_id','category_id');
    }
}
