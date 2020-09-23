<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        $posts = DB::table('tbl_post')
                ->join('tbl_kategori','tbl_kategori.id','tbl_post.kategori_id')
                ->join('users','users.id','tbl_post.author_id')
                ->limit(6)->orderBy('tbl_post.create_at', 'desc')->get();
        $gallery = DB::table('tbl_gallery')->limit(12)->orderBy('created_at', 'asc')->get();
        return view('website.index', compact('gallery','posts'));
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
        $side_posts = DB::table('tbl_post')
                    ->join('tbl_kategori','tbl_kategori.id','tbl_post.kategori_id')
                    ->join('users','users.id','tbl_post.author_id')
                    ->limit(6)->orderBy('tbl_post.create_at', 'asc')->get();
        $posts = DB::table('tbl_post')
                ->join('tbl_kategori','tbl_kategori.id','tbl_post.kategori_id')
                ->join('users','users.id','tbl_post.author_id')
                ->limit(4)->orderBy('tbl_post.create_at', 'desc')->get();
        return view('website.berita.berita', compact('posts','side_posts'));
    }

    public function detail_berita($slug){
        $side_posts = DB::table('tbl_post')
                    ->join('tbl_kategori','tbl_kategori.id','tbl_post.kategori_id')
                    ->join('users','users.id','tbl_post.author_id')
                    ->limit(6)->orderBy('tbl_post.create_at', 'asc')->get();
        $post_detail = DB::table('tbl_post')
                    ->join('tbl_kategori','tbl_kategori.id','tbl_post.kategori_id')
                    ->join('users','users.id','tbl_post.author_id')
                    ->where('slug', $slug)->first();
                    // dd($post);
        return view('website.berita.detail_berita', compact('side_posts','post_detail'));
    }

    public function event(){
        return view('website.event');
    }
    public function contact(){
        return view('website.contact');
    }
}
