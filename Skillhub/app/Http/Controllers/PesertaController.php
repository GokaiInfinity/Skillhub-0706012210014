<?php

namespace App\Http\Controllers;

use App\Models\peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    // Menampilkan semua peserta
    public function pesertaView()
    {
        // Mengambil semua data peserta dari model peserta
        $pesertas = peserta::all();

        // Mengembalikan view dengan data peserta
        return view('pesertaview.viewpeserta',["pesertas" => $pesertas]);
    }

    // Menampilkan form untuk menambahkan peserta baru
    public function addPesertaView()
    {
        // Mengembalikan view untuk menambah peserta
        return view('pesertaview.addpeserta');
    }

    // Memasukkan peserta baru ke database
    public function insertPeserta(Request $request)
    {
        // Membuat entri peserta baru di database
        peserta::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);

        // Kembali ke halaman peserta setelah penambahan
        return redirect('/peserta');
    }

    // Menampilkan detail peserta tertentu berdasarkan id dari table peserta.
    public function detailPeserta($peserta_id)
    {
        // Mengambil data peserta beserta kelas yang diikutinya
        $peserta = peserta::with('ikutkursus')->find($peserta_id);

        // Kembali ke view detail peserta dengan data peserta
        return view('pesertaview.detailpeserta',compact('peserta'));
    }

    // Menampilkan form untuk mengedit peserta tertentu
    public function editPesertaView($peserta_id)
    {
        // Mengambil data peserta berdasarkan id
        $peserta = peserta::find($peserta_id);

        // Kembali ke halaman edit peserta dengan data peserta
        return view('pesertaview.editpeserta',[
            "peserta" => $peserta
        ]);
    }

    // Memperbarui data peserta tertentu di database
    public function updatePeserta(Request $request, $peserta_id)
    {
        // Mengambil data peserta berdasarkan id
        $peserta = peserta::find($peserta_id);
        // Memperbarui data peserta dengan data baru dari request
        $peserta->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'tanggal_lahir' => $request->tanggal_lahir
        ]);

        // Kembali ke halaman peserta setelah pembaruan
        return redirect('/peserta');
    }

    public function deletepeserta($peserta_id)
    {
        $peserta = peserta::find($peserta_id);
        $peserta->delete();

        return redirect('/peserta');
    }

}
