<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class UserData extends Model
{
    use HasFactory;
    protected $table = 'user_data';

    protected $fillable = [
        'portofolio_id',
        'path',
    ];

    public function user()
    {
    return $this->belongsTo(User::class);
    }

}