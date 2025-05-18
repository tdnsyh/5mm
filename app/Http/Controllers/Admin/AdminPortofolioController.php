<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPortofolioController extends Controller
{
    public function index()
    {
        $title = 'Portofolio';
        return view('admin.portofolio', compact('title'));
    }
}