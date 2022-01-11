<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecValue extends Model
{   
    use HasFactory;
    
    protected $table = "spec_values";

    public function spec()
    {
        return $this->belongsTo(Spec::class, 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_spec_values', 'spec_value_id', 'product_id');
    }
}
