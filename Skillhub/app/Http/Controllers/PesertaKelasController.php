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

    public function insertpesertatokelas(Request $request, $peserta_id){
        $peserta = peserta::findOrFail($peserta_id);
        $peserta->ikutkursus()->attach($request->kelas_id);

        return redirect('/peserta');
    }


}
