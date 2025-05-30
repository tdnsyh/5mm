<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimoni extends Model
{
    use HasFactory;
    protected $table = 'testimoni';

    protected $fillable = [
        'user_id',
        'reservasi_id',
        'pesan',
        'rating',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Paket
    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}