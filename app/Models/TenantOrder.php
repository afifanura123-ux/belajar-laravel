<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TenantOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'order_id',
        'subtotal',
        'commission_amount',
        'total_amount',
    ];

    protected function casts(): array
    {
        return [
            'subtotal' => 'integer',
            'commission_amount' => 'integer',
            'total_amount' => 'integer',
        ];
    }

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
}
