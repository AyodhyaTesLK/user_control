<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllConfiguration extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'lable',
        'description',
        'default',
        'domain',
        'batch_no',
        'type',
        'options',
    ];
    
}
