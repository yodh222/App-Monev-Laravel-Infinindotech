<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDaerah extends Model
{
    /** @use HasFactory<\Database\Factories\MasterDaerahFactory> */
    use HasFactory;

    protected $table = 'master_daerah';
}