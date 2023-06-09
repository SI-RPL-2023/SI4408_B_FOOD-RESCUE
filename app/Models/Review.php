<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'review';
    protected $primaryKey = 'id';
    protected $fillable = [
        'rating',
        'review',
    ];
}
