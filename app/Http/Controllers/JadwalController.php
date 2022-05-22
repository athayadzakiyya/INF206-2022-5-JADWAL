<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function jadwalTenagaMedis()
    {
        $jadwal = Jadwal::all();
        $hari = array('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu');
        $jam = array(1, 2, 3, 4, 5, 6);
        // $absen = [
        //     ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
        //     ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
        //     ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
        //     ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
        //     ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
        // ];
        $absen = [];
        foreach($jam as $listJam){

            $jamAbsen =[$listJam];
            foreach($hari as $listHari){

                $nama = null;
                foreach($jadwal as $listJadwal){
                    if($listJadwal->hari == $listHari && $listJadwal->waktu == $listJam){
                        $nama = $listJadwal->user->nama;
                    }
                }
                array_push($jamAbsen, $nama);
            }
            array_push($absen, $jamAbsen);
        }
        // dd($absen);

        return view('jadwal_tenaga_medis', [
            'absen' => $absen
        ]);
        // return view('jadwal_tenaga_medis', [
        //     'jadwal' => $jadwal
        // ]);
    }

    public function jadwalSaya()
    {
        $jadwalSaya = Jadwal::where('user_id', session('id'))->get();
        //  dd(session('id'));
    // dd($absensi);
        return view('jadwal_saya',[
            'jadwalSaya' => $jadwalSaya
        ]);
    }

    public function jadwalTenagaMedisAdmin()
    {
        $jadwal = Jadwal::all();
        $hari = array('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu');
        $jam = array(1, 2, 3, 4, 5, 6);
        // $absen = [
        //     ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
        //     ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
        //     ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
        //     ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
        //     ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu'],
        // ];
        $absen = [];
        foreach($jam as $listJam){

            $jamAbsen =[$listJam];
            foreach($hari as $listHari){

                $nama = null;
                foreach($jadwal as $listJadwal){
                    if($listJadwal->hari == $listHari && $listJadwal->waktu == $listJam){
                        $nama = $listJadwal->user->nama;
                    }
                }
                array_push($jamAbsen, $nama);
            }
            array_push($absen, $jamAbsen);
        }
        // dd($absen);

        return view('jadwal_tenaga_medis_admin',[
            'absen' => $absen
        ]);
    }

    public function absensiAdmin()
    {
            
        $time = date("H:i");        

        $date = date('l');
        // dd($date);
        if($date == 'Monday'){
            $datecode = 'senin';
        }elseif($date == 'Tuesday'){
            $datecode = 'selasa';
        }elseif($date == 'Wednesday'){
            $datecode = 'rabu';
        }elseif($date == 'Thursday'){
            $datecode = 'kamis';
        }elseif($date == 'Friday'){
            $datecode = 'jumat';
        }elseif($date == 'Saturday'){
            $datecode = 'sabtu';
        }elseif($date == 'Sunday'){
            $datecode = 'minggu';
        }
        // $jadwal = Jadwal::all();
        // $nama = Jadwal::where(user->nama);
        // dd($datecode);
        
        // // panggil model jadwal
        if($datecode){
        $code = Jadwal::where('hari',$datecode)->get();
        }else{
            $code = null;
        }
        // dd($code);
        return view('absensi_admin',[
            'absensi_admin' => $code
            // 'code' => Jadwal::where('hari',$datecode)->get()

        ]);
    }

    public function absensi()
    {
        $time = date("H:i");
        // $time = date("H:i");
        // dd($time);

        if("08:00" < $time &&  $time < "12:00"){
            $timecode = 1;       
        }elseif("12:00" < $time && $time < "16:00"){
            $timecode = 2;
        }elseif("16:00" < $time && $time < "20:00"){
            $timecode = 3;
        }elseif("20:00" < $time && $time < "00:00"){
            $timecode = 4;
        }elseif("00:00" < $time && $time < "04:00"){
            $timecode = 5;
        }elseif("04:00" < $time && $time < "08:00"){
            $timecode = 6;
        }

        // dd($timecode);
        

        $date = date('l');
        // dd($date);
        if($date == 'Monday'){
            $datecode = 'senin';
        }elseif($date == 'Tuesday'){
            $datecode = 'selasa';
        }elseif($date == 'Wednesday'){
            $datecode = 'rabu';
        }elseif($date == 'Thursday'){
            $datecode = 'kamis';
        }elseif($date == 'Friday'){
            $datecode = 'jumat';
        }elseif($date == 'Saturday'){
            $datecode = 'sabtu';
        }elseif($date == 'Sunday'){
            $datecode = 'minggu';
        }
        // dd($datecode);
        
        // // panggil model jadwal
        if($timecode){
        $absensi = Jadwal::where('user_id', session('id'))->where('hari',$datecode)->where('waktu',$timecode)->get();
        }else{
            $absensi = null;
        }
        
        return view('absensi',[
            'absensi' => $absensi
        ]);
    }
}
