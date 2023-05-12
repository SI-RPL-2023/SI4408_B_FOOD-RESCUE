<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'makanans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'deskripsi',
        'jenis',
        'exp_date',
        'availability',
        'foto',
    ];
}
