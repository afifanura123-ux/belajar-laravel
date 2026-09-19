<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Canteen extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'slug',
        'tax_rate',
        'service_fee_rate',
        'status',
    ];

    public function tenants(): HasMany
    {
        return $this->hasMany(Tenant::class);
    }
}
