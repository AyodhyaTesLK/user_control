<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    use HasFactory;

    protected $fillable = [
        'credentials',
        'return_address',
        'account_id',
        'return_email',
        'logo',
        'api_doc_url',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
