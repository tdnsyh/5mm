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
        'user_id',
        'telepon',
        'alamat'
    ];

    public function user()
    {
    return $this->belongsTo(User::class);
    }

}