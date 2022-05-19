<?php

namespace App\Http\Controllers;

use App\Http\Resources\pembayaranResource;
use App\Models\pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class pembayaranController extends Controller
{
    public function page()
    {
        $auth = Auth::user();
        return Inertia::render('Menu/Pembayaran', [
            'auth_id' => $auth->id,
        ]);
    }

    public function get_pembayaran(Request $request)
    {
        $pembayaran = pembayaran::all();

        return response()->json([
            'Response_code' => '00',
            'Response_message' => 'Pembayaran Berhasil ditambah',
            'Pembayaran' => pembayaranResource::collection($pembayaran),
        ]);
    }

    public function create_pembayaran(Request $request)
    {

        $user = pembayaran::create([
            'petugas_id' => request('petugas_id'),
            'pasien_id' => request('pasien_id'),
            'harga' => request('harga'),
        ]);


        return response()->json([
            'Response_code' => '00',
            'Response_message' => 'pembayaran Berhasil ditambah',
            'pembayaran' => new pembayaranResource($user),
        ]);
    }

    public function store_pembayaran(Request $request, $id)
    {
        $pembayaran = pembayaran::find($id);
        $pembayaran->petugas_id = request('petugas_id');
        $pembayaran->pasien_id = request('pasien_id');
        $pembayaran->harga = request('harga');
        $pembayaran->save();


        return response()->json([
            'Response_code' => '00',
            'Response_message' => 'pembayaran Berhasil dirubah',
            'pembayaran' => new pembayaranResource($pembayaran),
        ]);
    }

    public function hapus_pembayaran($id)
    {
        $pembayaran = pembayaran::find($id);
        $pembayaran->delete();

        return response()->json([
            'Response_code' => '00',
            'Response_message' => 'pembayaran Berhasil dihapus',
        ]);
    }
}
