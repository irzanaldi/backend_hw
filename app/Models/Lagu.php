<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lagu extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_lagu',
        'img_thumb',
        'penyanyi',
        'jumlah_dimainkan'
    ];
}
