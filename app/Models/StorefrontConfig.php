<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StorefrontConfig extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'key',
        'password',
        'hook_secret',
        'city',
        'country',
        'mobile',
        'province',
        'zipcode',
        'currency',
        'exchange_rate',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
