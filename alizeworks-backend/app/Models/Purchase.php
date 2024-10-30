<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Purchase extends Model
{
    /**
     * Get the user associated with the purchase
     */
    public function users(): HasOne
    {
        return $this->hasOne(User::class);
    }

    /**
     * Get the product associated with the purchase
     */
    public function products(): HasOne
    {
        return $this->hasOne(Product::class);
    }

    /**
     * Get the user promotion associated with the purchase
     */
    public function user_promotions(): HasOne
    {
        return $this->hasOne(UserPromotion::class);
    }
}
