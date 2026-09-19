<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutboxEvent extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_type',
        'aggregate_type',
        'aggregate_id',
        'payload',
        'status',
        'processed_at',
    ];

    protected function casts(): array
    {
        return [
            'aggregate_id' => 'integer',
            'payload' => 'array',
            'processed_at' => 'datetime',
        ];
    }
}
