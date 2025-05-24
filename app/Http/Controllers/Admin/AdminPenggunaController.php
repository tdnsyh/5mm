<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminPenggunaController extends Controller
{

    public function index()
    {
        $title = 'Daftar Pengguna';
        $users = User::all();
        return view('admin.pengguna', compact('users', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Pengguna';
        return view('admin.pengguna-create', compact('title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $title = 'Edit Pengguna';
        $user = User::findOrFail($id);
        return view('admin.pengguna-edit', compact('user', 'title'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role' => 'required',
            'password' => 'nullable|min:6',
        ]);

        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil diperbarui!!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('pengguna.index')->with('success', 'Pengguna berhasil dihapus!!');
    }
}