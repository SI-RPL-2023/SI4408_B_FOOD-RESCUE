<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $table = 'resep';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'foto',
        'deskripsi',
        'person',
        'time',
        'ingredients',
        'steps',

    ];
}
