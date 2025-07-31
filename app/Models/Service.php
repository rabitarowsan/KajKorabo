<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Allow mass assignment for these columns
    protected $fillable = [
        'name',
        'description',
        'price',
        'discount',
        'estimated_delivery',
        'budget',
    ];

    // Optional: Relationship with service_images
    public function images()
    {
        return $this->hasMany(ServiceImage::class);
    }
}
