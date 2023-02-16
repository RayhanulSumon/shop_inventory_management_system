<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_category_id',
        'category_id',
        'title',
        'slug',
        'shop_id',
        'thumb_image',
        'price',
        'quantity',
        'status',
        'discount_status',
        'discount_price',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function detail(): HasOne
    {
        return $this->hasOne(Product_Detail::class);
    }
    public function images(): HasMany
    {
        return $this->hasMany(Product_Image::class);
    }
    public function colors(): BelongsToMany
    {
        return $this->belongsToMany(Color::class);
    }
    public function sizes(): BelongsToMany
    {
        return $this->belongsToMany(Size::class);
    }
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
