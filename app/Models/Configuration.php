<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'value',
        'description',
        'default',
        'domain',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
