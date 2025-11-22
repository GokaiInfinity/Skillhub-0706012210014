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

    // Memasukkan peserta ke dalam kelas
    public function insertPesertaToKelas(Request $request, $peserta_id){
        // Mengambil data peserta berdasarkan peserta_id
        $peserta = peserta::findOrFail($peserta_id);
        // Mencegah duplikasi entri dengan syncWithoutDetaching
        $peserta->ikutkursus()->syncWithoutDetaching([$request->kelas_id]);

        // Kembali ke halaman peserta setelah penambahan
        return redirect('/peserta');
    }
    // Menampilkan peserta yang terdaftar dalam suatu kelas
    public function showPesertaFromKelas($kelas_id){
        // Mengambil data kelas berdasarkan kelas_id
        $kelas = kelas::findOrFail($kelas_id);
        // Mengambil peserta yang terdaftar dalam kelas tersebut
        $pesertas = $kelas->parapeserta;

        // Kembali ke view dengan data kelas dan peserta
        return view("kelasview.showpesertafromkelas", compact('kelas', 'pesertas'));
    }

    // Menampilkan kelas yang diikuti oleh peserta
    public function showKelasFromPeserta($peserta_id){
        // Mengambil data peserta berdasarkan peserta_id
        $peserta = peserta::findOrFail($peserta_id);
        // Mengambil kelas yang diikuti oleh peserta tersebut
        $kelas = $peserta->ikutkursus;

        // Kembali ke view dengan data peserta dan kelas
        return view("pesertaview.showkelasfrompeserta", compact('peserta', 'kelas'));
    }
    // Menghapus peserta dari kelas.
    public function removePesertaFromKelas($peserta_id, $kelas_id){
        // Mengambil data peserta berdasarkan peserta_id
        $peserta = peserta::findOrFail($peserta_id);
        // Menghapus relasi peserta dengan kelas tertentu berdasarkan kelas_id
        $peserta->ikutkursus()->detach($kelas_id);

        // Kembali ke halaman detail kelas setelah penghapusan dijalankan.
        return redirect('/detailkelas/' . $kelas_id);
    }



}
