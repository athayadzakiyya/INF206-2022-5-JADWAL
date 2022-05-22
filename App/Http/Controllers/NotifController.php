<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Ganti;

class NotifController extends Controller
{
    public function bantuan()
    {
        return view('bantuan',[]);
    }

    public function pemberitahuanAdmin()
    {
        // $notif=DB::table('jadwal')->where('hari', $hari)->where('waktu', $waktu)->get();
        // $nama = User::find($nama);
        $notif_admin=Ganti::all();
        return view('pemberitahuan_admin',[
            'notif_admin' => $notif_admin
        ]);
    }

    public function pemberitahuan()
    {
        return view('pemberitahuan',[]);
    }

    public function ganti($id)
    {
        $jadwal_awal=Jadwal::find($id);
        // dd($jadwal_awal);
        $jadwal=Jadwal::all();
        return view('ganti',[
            'ganti'=> $jadwal, 
            'first'=> $jadwal_awal
        ]);
    }

    public function request(Request $request)
    {
        $jadwal_awal=Jadwal::find($request->jadwal_awal);
        // dd($jadwal_awal);
        DB::table('ganti')->insert([
            'request_jadwal' => $request->jadwal_awal,
            'request_id' => $jadwal_awal->user_id,
            'purpose_jadwal' => $request->option,
            'alasan' => $request->alasan
        ]);
        return redirect('/jadwal_saya');
    }
}
