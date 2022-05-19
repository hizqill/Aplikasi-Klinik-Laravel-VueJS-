<?php

namespace App\Http\Controllers;

use App\Http\Resources\dokterResource;
use App\Models\dokter;
use Illuminate\Http\Request;
use Inertia\Inertia;

class dokterController extends Controller
{
    public function page()
    {
        return Inertia::render('Menu/Dokter', [
            'status' => session('status'),
        ]);
    }


    public function get_dokter(Request $request)
    {
        $dokter = dokter::all();

        return response()->json([
            'Response_code' => '00',
            'Response_message' => 'Petugas Berhasil ditambah',
            'Dokter' => dokterResource::collection($dokter),
        ]);
    }

    public function create_dokter(Request $request)
    {

        $dokter = dokter::create([
            'nama' => request('nama'),
            'alamat' => request('alamat'),
            'spesialis' => request('spesialis'),
        ]);


        return response()->json([
            'Response_code' => '00',
            'Response_message' => 'Dokter Berhasil ditambah',
            'Pasien' => new dokterResource($dokter),
        ]);
    }

    public function store_dokter(Request $request, $id)
    {
        $dokter = dokter::find($id);
        $dokter->nama = request('nama');
        $dokter->alamat = request('alamat');
        $dokter->spesialis = request('spesialis');
        $dokter->save();


        return response()->json([
            'Response_code' => '00',
            'Response_message' => 'dokter Berhasil dirubah',
            'Dokter' => new dokterResource($dokter),
        ]);
    }

    public function hapus_dokter($id)
    {
        $pasien = dokter::find($id);
        $pasien->delete();


        return response()->json([
            'Response_code' => '00',
            'Response_message' => 'Dokter Berhasil dihapus',
        ]);
    }
}
