<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id');
    }

    public function caregory()
    {
        return $this->belongsTo(Category::class, 'id');
    }

    public function specs()
    {
        return $this->belongsToMany(Spec::class, 'products_specs', 'product_id','spec_id');
    }

    public function spec_values()
    {
        return $this->belongsToMany(SpecValue::class, 'products_spec_values', 'product_id','spec_value_id');
    }
}
