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
        'lokasi',
        'exp_date',
        'id_pengunggah',
        'availability',
        'foto',
    ];

    public function scopeFilter($query, array $filters) {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where(function($query) use ($search) {
                $query->where('nama', 'like', '%' . $search . '%');
            });
        });

        $query->when($filters['location'] ?? false, function($query, $location) {
            return $query->where(function($query) use ($location) {
                $query->where('lokasi', $location);
            });
        });

        $query->when($filters['jenis'] ?? false, function($query, $jenis) {
            return $query->where(function($query) use ($jenis) {
                $query->where('jenis', $jenis);
            });
        });
    }
}
