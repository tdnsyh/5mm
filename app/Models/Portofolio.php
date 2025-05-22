<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portofolio extends Model
{

    use HasFactory;
    protected $table = 'portofolio';

    protected $fillable = [
        'judul',
        'deskripsi',
    ];

    public function photos()
    {
    return $this->hasMany(PortofolioFoto::class);
    }

}