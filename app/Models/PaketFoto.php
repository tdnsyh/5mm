<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketFoto extends Model
{
    use HasFactory;

    protected $fillable = ['paket_id', 'path'];

    protected $table = 'paket_foto';

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }
}