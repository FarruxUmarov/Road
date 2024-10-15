<?php

namespace App\Models;

use Database\Factories\FineFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fine extends Model
{
    /** @use HasFactory<FineFactory> */
    use HasFactory;

    protected $table = 'fines';

    protected $fillable = [
        'plate_number',
        'amount',
        'date',
        'type',
        'car_id',
    ];
}
