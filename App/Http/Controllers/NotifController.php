<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotifController extends Controller
{
    public function bantuan()
    {
        return view('bantuan',[]);
    }

    public function pemberitahuanAdmin()
    {
        return view('pemberitahuan_admin',[]);
    }

    public function pemberitahuan()
    {
        return view('pemberitahuan',[]);
    }
}
