<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spec extends Model
{   
    use HasFactory;
    
    protected $table = "specs";

    public function spec_values()
    {
        return $this->hasMany(SpecValue::class, 'spec_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_specs', 'spec_id', 'product_id');
    }
}
