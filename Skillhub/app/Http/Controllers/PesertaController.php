<?php

namespace App\Http\Controllers;

use App\Models\peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function pesertaview()
    {
        $pesertas = peserta::all();

        return view('pesertaview.viewpeserta',[
            "pesertas" => $pesertas
        ]);
    }

    public function addpesertaview()
    {
        return view('pesertaview.addpeserta');
    }

    public function insertpeserta(Request $request)
    {
        peserta::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);

        return redirect('/peserta');
    }

    public function detailpeserta($peserta_id)
    {
        $peserta = peserta::with('ikutkursus')->find($peserta_id);

        return view('pesertaview.detailpeserta',compact('peserta'));
    }

    public function editpesertaview($peserta_id)
    {
        $peserta = peserta::find($peserta_id);

        return view('pesertaview.editpeserta',[
            "peserta" => $peserta
        ]);
    }

    public function updatepeserta(Request $request, $peserta_id)
    {
        $peserta = peserta::find($peserta_id);
        $peserta->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);

        return redirect('/peserta');
    }

    public function deletepeserta($peserta_id)
    {
        $peserta = peserta::find($peserta_id);
        $peserta->delete();

        return redirect('/peserta');
    }

}
