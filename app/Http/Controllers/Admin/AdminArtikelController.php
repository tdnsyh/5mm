<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminArtikelController extends Controller
{
    public function index()
    {
        $title = 'Artikel';
        return view('admin.artikel', compact('title'));
    }
}