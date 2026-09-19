<?php

namespace App\Models;

use Database\Factories\OutboxFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outbox extends Model
{
    /** @use HasFactory<OutboxFactory> */
    use HasFactory;
}
