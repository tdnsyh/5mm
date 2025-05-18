<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPaketController extends Controller
{
    public function index()
    {
        $title = 'Paket';
        return view('admin.paket', compact('title'));
    }
}