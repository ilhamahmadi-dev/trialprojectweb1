<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all(); // ambil semua data guru
        return view('guru.index', compact('gurus'));
    }


    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|unique:gurus,email',
            'password' => 'required|min:3',
        ]);

        // Simpan dengan bcrypt password
        Guru::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'status' => 'aktif',
        ]);

        return redirect()->route('guru.create')->with('success', 'Guru berhasil ditambahkan!');
    }
}
