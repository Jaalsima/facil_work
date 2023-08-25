<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonovanController extends Controller
{
    public function home(){
        return view('donovan.home');
    }

    public function request(){
        return view('donovan.request');
    }

    public function request2(){
        return view('donovan.request2');
    }


}