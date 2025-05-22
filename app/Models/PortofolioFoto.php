<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortofolioFoto extends Model
{
    use HasFactory;
    protected $table = 'portofolio_foto';

    protected $fillable = [
        'portofolio_id',
        'path',
    ];

    public function portofolio()
    {
    return $this->belongsTo(Portofolio::class);
    }

}