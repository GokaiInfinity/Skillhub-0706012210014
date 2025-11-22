<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class KelasController extends Controller
{
    public function kelasview()
    {
        $kelas = kelas::all();

        return view('kelasview.viewkelas',[
            "kelas" => $kelas
        ]);

    }
}
