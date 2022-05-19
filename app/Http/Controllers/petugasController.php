<?php

namespace App\Http\Controllers;

use App\Http\Resources\petugasResource;
use App\Models\petugas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class petugasController extends Controller
{
    public function page()
    {
        return Inertia::render('Menu/Petugas', [
            'status' => session('status'),
        ]);
    }

    public function get_petugas(Request $request)
    {
        $pasien = petugas::all();

        return response()->json([
            'Response_code' => '00',
            'Response_message' => 'Petugas Berhasil Ditampilkan',
            'Petugas' => petugasResource::collection($pasien),
        ]);
    }

    public function daftar(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users',
            'password' => ['required'],
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $petugas = new petugas();
        $petugas->nama = request('name');
        $petugas->alamat = request('alamat');
        $petugas->user_id = $user->id;
        $petugas->save();

        return response()->json([
            'Response_code' => '00',
            'Response_message' => 'Petugas Berhasil ditambah',
        ]);
    }
}
