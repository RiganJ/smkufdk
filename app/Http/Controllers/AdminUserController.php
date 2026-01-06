<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    // ================= LIST USER =================
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users')); // view sesuai file
    }

    // ================= FORM TAMBAH USER =================
    public function create()
    {
        return view('admin.users_create'); // buat file baru untuk form tambah user
    }

    // ================= SIMPAN USER =================
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:100',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil ditambahkan');
    }
}
