<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function loginUser(){
        return view('login');
    }

    public function loginProsesUser(Request $request){
        // dd($request);
        $masuk = User::where('id', $request->userId)->
        where('status', 'user')->first();
        if($masuk){
            if($masuk->password == $request->password){
                session()->put('id', $masuk->id);
                // dd(session('id'));
                return redirect('/jadwal_tenaga_medis');
            }else{
                return redirect('/login');
            }
        }else{
            return redirect('/login');
        }
    }
}
