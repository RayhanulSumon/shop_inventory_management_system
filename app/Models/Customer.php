<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;

    public function address(): HasOne
    {
        return $this->hasOne(Customer_Address::class);
    }
    public function delivery_address(): HasMany
    {
        return $this->hasMany(Customer_Delivery_Address::class);
    }
}
