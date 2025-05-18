<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPembayaranController extends Controller
{
    public function index()
    {
        $title = 'Pembayaran';
        return view('admin.pembayaran', compact('title'));
    }
}