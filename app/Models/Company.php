<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'first_name',
        'last_name',
        'email_address',
        'addressline1',
        'addressline2',
        'city',
        'country',
        'hot_line_contact',
        'operation_email',
        'helpdesk_email',
        'customer_support_email',
        'supply_email',
        'logo',
    ];

    public function companies()
    {
        return $this->hasMany(User::class);
    }

    public function shopify_configs()
    {
        return $this->hasMany(ShopifyConfig::class);
    }

    public function couriers()
    {
        return $this->hasMany(Courier::class);
    }

    public function cofigurations()
    {
        return $this->hasMany(Configuration::class);
    }
}
