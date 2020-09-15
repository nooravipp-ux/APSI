<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function apsi(){
        return view('website.keanggotaan.keanggotaan');
    }

    public function keanggotaan(){
        return view('website.keanggotaan.keanggotaan');
    }
    public function contact(){
        return view('website.contact');
    }
}
