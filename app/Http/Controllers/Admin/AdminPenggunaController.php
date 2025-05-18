<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPenggunaController extends Controller
{
    public function index()
    {
        $title = 'Pengguna';
        return view('admin.pengguna', compact('title'));
    }
}