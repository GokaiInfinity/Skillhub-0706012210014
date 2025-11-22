<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Kelas;

class PesertaKelasController extends Controller
{
    public function addPesertatoKelas($peserta_id){
        $peserta = peserta::findOrFail($peserta_id);
        $allkelas = Kelas::all();

        return view("pesertaview.addpesertatokelas", compact('peserta', 'allkelas'));
    }

    public function insertPesertaToKelas(Request $request, $peserta_id){
        $peserta = peserta::findOrFail($peserta_id);
        $peserta->ikutkursus()->attach($request->kelas_id);

        return redirect('/peserta');
    }

    public function showPesertaFromKelas($kelas_id){
        $kelas = kelas::findOrFail($kelas_id);
        $pesertas = $kelas->parapeserta;

        return view("kelasview.showpesertafromkelas", compact('kelas', 'pesertas'));
    }

    public function showKelasFromPeserta($peserta_id){
        $peserta = peserta::findOrFail($peserta_id);
        $kelas = $peserta->ikutkursus;

        return view("pesertaview.showkelasfrompeserta", compact('peserta', 'kelas'));
    }

    public function removePesertaFromKelas($peserta_id, $kelas_id){
        $peserta = peserta::findOrFail($peserta_id);
        $peserta->ikutkursus()->detach($kelas_id);

        return redirect('/peserta');
    }



}
