<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'types_id',
        'price',
        'is_active',
        'media_id'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean'
        ];
    }

    // Many to One relationship: one product has one type
    public function types()
    {
        return $this->belongsTo(Type::class);
    }
}
