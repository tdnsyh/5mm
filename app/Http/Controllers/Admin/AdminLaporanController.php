<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLaporanController extends Controller
{
    public function index()
    {
        $title = 'Laporan';
        return view('admin.laporan', compact('title'));
    }
}