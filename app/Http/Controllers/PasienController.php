<?php

namespace App\Http\Controllers;

use App\Http\Resources\pasienResource;
use App\Models\pasien;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PasienController extends Controller
{
    public function page()
    {
        return Inertia::render('Menu/Pasien', [
            'status' => session('status'),
        ]);
    }

    public function get_pasien(Request $request)
    {
        $pasien = pasien::all();

        return response()->json([
            'Response_code' => '00',
            'Response_message' => 'Pasien Berhasil Ditampilkan',
            'Pasien' => pasienResource::collection($pasien),
        ]);
    }

    public function create_pasien(Request $request)
    {

        $user = pasien::create([
            'nama' => request('nama'),
            'alamat' => request('alamat'),
            'tanggal_datang' => request('tanggal_datang'),
            'keluhan' => request('keluhan'),
            'dokter_id' => request('dokter_id'),
        ]);


        return response()->json([
            'Response_code' => '00',
            'Response_message' => 'Pasien Berhasil ditambah',
            'Pasien' => new pasienResource($user),
        ]);
    }

    public function store_pasien(Request $request, $id)
    {
        $pasien = pasien::find($id);
        $pasien->nama = request('nama');
        $pasien->alamat = request('alamat');
        $pasien->tanggal_datang = request('tanggal_datang');
        $pasien->keluhan = request('keluhan');
        $pasien->dokter_id = request('dokter_id');
        $pasien->save();

        return response()->json([
            'Response_code' => '00',
            'Response_message' => 'Pasien Berhasil dirubah',
            'Pasien' => new pasienResource($pasien),
        ]);
    }

    public function hapus_pasien($id)
    {
        $pasien = pasien::find($id);
        $pasien->delete();


        return response()->json([
            'Response_code' => '00',
            'Response_message' => 'Pasien Berhasil dihapus',
        ]);
    }
}
