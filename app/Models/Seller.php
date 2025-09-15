<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'registration_number',
        'ntn',
        'province',
        'sandbox_token',
        'production_token',
        'environment',
        'address',
        'scenarios',
    ];

    protected $casts = [
        'scenarios' => 'array', // ✅ automatically convert JSON <-> array
    ];
}
