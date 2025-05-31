<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';

    protected $fillable = [
        'user_id',
        'paket_id',
        'kode_reservasi',
        'alamat',
        'no_hp',
        'tanggal_reservasi',
        'status',
        'total_harga',
        'status_pembayaran',
        'metode_pembayaran',
        'bukti_transfer'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }

    public function testimoni()
    {
    return $this->hasOne(Testimoni::class);
    }
}