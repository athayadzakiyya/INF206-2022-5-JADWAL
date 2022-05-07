<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function jadwalTenagaMedis()
    {
        $jadwal = Jadwal::all();
        // dd($jadwal);

        return view('jadwal_tenaga_medis', [
            'jadwal' => $jadwal
        ]);
    }
}
