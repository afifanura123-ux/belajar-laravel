<?php

namespace App\Models;

use Database\Factories\LedgerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ledger extends Model
{
    /** @use HasFactory<LedgerFactory> */
    use HasFactory;
}
