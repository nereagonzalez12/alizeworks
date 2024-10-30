<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserPromotion extends Model
{

    // Connecting to table in mysql
    protected $table = 'user_promotions';

    // Fields ignored to insert with Create or Update method
    protected $guarded = [
        'used_at',
    ];

    /**
     * Get the promotion codes associated with the user promotions
     */
    public function promotionalCodes(): HasMany
    {
        return $this->hasMany(PromotionalCodes::class);
    }
}
