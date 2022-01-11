<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{     
    use HasFactory;

    protected $table = "categories";

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class, 'categories_brands', 'category_id', 'brand_id');
    }
}
