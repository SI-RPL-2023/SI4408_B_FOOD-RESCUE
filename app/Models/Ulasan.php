<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'ulasan';
    protected $primaryKey = 'id';
    protected $fillable = [
        'ulasan',
    ];
}
