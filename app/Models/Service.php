<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'price',
        'discount_percentage',
        'reviews',
        'short_description',
        'long_description',
        'estimated_delivery_time',
        'is_featured',
        'status',
    ];

    /**
     * Accessor: Get the final price after applying the discount
     */
    public function getDiscountedPriceAttribute()
    {
        if ($this->discount_percentage > 0) {
            return round($this->price * (1 - $this->discount_percentage / 100), 2);
        }

        return $this->price;
    }

    /**
     * Scope: Only featured services
     */
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    /**
     * Scope: Only active services
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
