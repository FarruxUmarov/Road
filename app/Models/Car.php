<?php

namespace App\Models;

use Database\Factories\CarFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /** @use HasFactory<CarFactory> */
    use HasFactory;

    protected $table = 'cars';
    protected $fillable = [
        'model',
        'color',
        'year',
        'plate_number',
        'owner_id',
    ];
}
