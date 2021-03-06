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
                return redirect('/absensi');
            }else{
                return redirect('/login');
            }
        }else{
            return redirect('/login');
        }
    }
    
    public function loginAdmin(){
        return view('login_admin');
    }

    public function loginProsesAdmin(Request $request){
        // dd($request);
        $in = User::where('id', $request->userId)->
        where('status', 'admin')->first();
        if($in){
            if($in->password == $request->password){
                session()->put('id', $in->id);
                // dd(session('id'));
                return redirect('/absensi_admin');
            }else{
                return redirect('/login_admin');
            }
        }else{
            return redirect('/login_admin');
        }
    }

}
