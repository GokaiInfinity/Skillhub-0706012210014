<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class KelasController extends Controller
{
    public function kelasView()
    {
        $kelas = kelas::all();

        return view('kelasview.viewkelas',[
            "kelas" => $kelas
        ]);

    }

    public function detailKelas()
    {

    }

    public function addKelasView()
    {
        return view('kelasview.addkelas');
    }

    public function insertKelas(Request $request)
    {
        kelas::create([
            'nama_kelas' => $request->nama_kelas,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'instruktur' => $request->instruktur
        ]);

        return redirect('/kelas');
    }

    public function editKelasView($kelas_id)
    {
        $kelas = kelas::find($kelas_id);

        return view('kelasview.editkelas',[
            "kelas" => $kelas
        ]);
    }

    public function updateKelas(Request $request, $kelas_id)
    {
        $kelas = kelas::find($kelas_id);
        $kelas->update([
            'nama_kelas' => $request->nama_kelas,
            'deskripsi_singkat' => $request->deskripsi_singkat,
            'instruktur' => $request->instruktur
        ]);

        return redirect('/kelas');
    }

    public function deleteKelas($kelas_id)
    {
        $kelas = kelas::find($kelas_id);
        $kelas->delete();

        return redirect('/kelas');
    }

}
