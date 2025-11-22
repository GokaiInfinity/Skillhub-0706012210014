<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use App\Models\Kelas;

class PesertaKelasController extends Controller
{
    // Tampilan form untuk menambahkan peserta ke kelas
    public function addPesertatoKelas($peserta_id){
        // Mengambil data peserta berdasarkan ID
        $peserta = peserta::findOrFail($peserta_id);
        // Mengambil semua kelas yang tersedia
        $allkelas = Kelas::all();

        // Mengarahkan ke view pada file addpesertatokelas.blade.php dengan data peserta dan semua kelas
        return view("pesertaview.addpesertatokelas", compact('peserta', 'allkelas'));
    }

    public function insertPesertaToKelas(Request $request, $peserta_id){
        $peserta = peserta::findOrFail($peserta_id);

        // Mencegah duplikasi entri dengan syncWithoutDetaching
        $peserta->ikutkursus()->syncWithoutDetaching([$request->kelas_id]);

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

        return redirect('/detailkelas/' . $kelas_id);
    }



}
