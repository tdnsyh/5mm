<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPesananController extends Controller
{
    public function index()
    {
        $title = 'Pesanan';
        return view('admin.pesanan', compact('title'));
    }
}