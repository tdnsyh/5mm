<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $table = 'paket';

    protected $fillable = ['type', 'kategori', 'nama', 'deskripsi', 'harga'];

    public function fotos()
    {
        return $this->hasMany(PaketFoto::class);
    }
}