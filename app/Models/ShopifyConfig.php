<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopifyConfig extends Model
{
    use HasFactory;

    protected $fillable = [
        'storefront_url',
        'storefront_key',
        'storefront_password',
        'storefront_hook_secret',
        'storefront_city',
        'storefront_country',
        'storefront_mobile',
        'storefront_province',
        'storefront_zipcode',
        'storefront_currency',
        'storefront_exchange_rate',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
