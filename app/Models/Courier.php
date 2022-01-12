<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    use HasFactory;

    protected $fillable = [
        'courier_credentials',
        'courier_return_address',
        'courier_account_id',
        'courier_return_email',
        'courier_logo',
        'courier_api_document',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
