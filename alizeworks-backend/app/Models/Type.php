<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected function name(): Attribute
    {
        return Attribute::make(
            // Mutator
            set: function ($value) {
                return strtolower($value);
            },
            // Accesor
            get: function ($value) {
                return ucfirst($value);
            }
        );
    }

    // One to Many relationship: one type can be associated with many products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
