<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Detail extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'description',
        'meta_description',
        'meta_keyword',
        'warranty',
    ];

}
