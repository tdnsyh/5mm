<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminJadwalController extends Controller
{
    public function index()
    {
        $title = 'Jadwal';
        return view('admin.jadwal', compact('title'));
    }
}