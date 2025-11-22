<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class KelasController extends Controller
{
    // Menampilkan semua kelas
    public function kelasView()
    {
        // Mengambil semua data kelas dari model kelas
        $kelas = kelas::all();

        // Kembali ke halaman viewkelas dengan data kelas
        return view('kelasview.viewkelas',[
            "kelas" => $kelas
        ]);

    }

    // Menampilkan detail kelas tertentu berdasarkan id dari table kelas.
    public function detailKelas($kelas_id)
    {
        // Mengambil data kelas beserta peserta yang terdaftar
        $kelas = kelas::with('parapeserta')->find($kelas_id);

        // Kembali ke view detail kelas dengan data kelas
        return view('kelasview.detailkelas',compact('kelas'));
    }

    // Menampilkan form untuk menambahkan kelas baru
    public function addKelasView()
    {
        // Kembali ke view untuk menambah kelas
        return view('kelasview.addkelas');
    }

    // Memasukkan kelas baru ke database
    public function insertKelas(Request $request)
    {
        // Membuat entri kelas baru di database
        kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'instruktur' => $request->instruktur
        ]);

        // Kembali ke halaman kelas setelah penambahan
        return redirect('/kelas');
    }

    // Menampilkan form untuk mengedit kelas tertentu
    public function editKelasView($kelas_id)
    {
        // Mengambil data kelas berdasarkan id
        $kelas = kelas::find($kelas_id);

        // Kembali ke halaman edit kelas dengan data kelas
        return view('kelasview.editkelas',[
            "kelas" => $kelas
        ]);
    }

    // Update data kelas tertentu di database
    public function updateKelas(Request $request, $kelas_id)
    {
        // Mengambil data kelas berdasarkan kelas_id
        $kelas = kelas::find($kelas_id);
        // Mengupdate data kelas dengan data baru dari request
        $kelas->update([
            'nama_kelas' => $request->nama_kelas,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'instruktur' => $request->instruktur
        ]);

        // Kembali ke halaman kelas setelah diupdate.
        return redirect('/kelas');
    }

    // Menghapus kelas tertentu dari database.
    public function deleteKelas($kelas_id)
    {
        // Mengambil data kelas berdasarkan kelas_id dan menghapusnya
        $kelas = kelas::find($kelas_id);
        // Menghapus kelas
        $kelas->delete();

        // Kembali ke halaman kelas setelah penghapusan dijalankan.
        return redirect('/kelas');
    }


}
