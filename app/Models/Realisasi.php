<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisasi extends Model
{
    /** @use HasFactory<\Database\Factories\RealisasiFactory> */
    use HasFactory;

    protected $table = 'realisasi';
}