<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionalCodes extends Model
{
    // Connecting to table in mysql
    protected $table = 'promotional_codes';



    // Many to One relationship: one product has one type
    public function userPromotions()
    {
        return $this->belongsToMany(UserPromotion::class);
    }
}
