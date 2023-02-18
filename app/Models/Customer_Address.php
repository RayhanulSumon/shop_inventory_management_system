<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'thana_id',
        'district_id',
        'division_id',
        'address',
        'mobile',
        'post_code',
    ];
}
