<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rating extends Model
{
    /**
     * Get the product associated with the user rating
     */
    public function products(): HasOne
    {
        return $this->hasOne(Product::class);
    }
}
