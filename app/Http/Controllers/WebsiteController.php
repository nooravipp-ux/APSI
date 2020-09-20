<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $gallery = DB::table('tbl_gallery')->limit(12)->orderBy('created_at', 'asc')->get();
        return view('website.index', compact('gallery'));
    }
    public function apsi(){
        return view('website.keanggotaan.keanggotaan');
    }

    public function sejarah(){
        return view('website.apsi.sejarah');
    }
    public function visi_misi(){
        return view('website.apsi.visi-misi');
    }
    public function struktur_organisasi(){
        return view('website.apsi.struktur-organisasi');
    }

    public function keanggotaan(){
        return view('website.keanggotaan.keanggotaan');
    }
    public function berita(){
        return view('website.berita');
    }
    public function event(){
        return view('website.event');
    }
    public function contact(){
        return view('website.contact');
    }
}
