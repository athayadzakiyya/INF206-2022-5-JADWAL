<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function loginAdmin(){
        return view('login');
    }

    public function loginProsesAdmin(Request $request){
        // dd($request);
        $masuk = Admin::where('id', $request->AdminId)->
        where('status', 'admin')->first();
        if($masuk){
            if($masuk->password == $request->password){
                session()->put('id', $masuk->id);
                // dd(session('id'));
                return redirect('/absensi_admin');
            }else{
                return redirect('/login');
            }
        }else{
            return redirect('/login');
        }
    }
}
