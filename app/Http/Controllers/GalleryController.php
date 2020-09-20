<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GalleryController extends Controller
{
    public function gallery(){
        $data_img = DB::table('tbl_gallery')->get();

        return view('admin.gallery.gallery', compact('data_img'));
    }

    public function upload_gambar(Request $req){

        $path_img = $req->file('img')->getRealPath();

        $file_img = base64_encode(file_get_contents($path_img));
        
        DB::table('tbl_gallery')->insert(
            ['gambar' => $file_img, 'title' => $req->title, 'created_at' => date('Y-m-d')]
        );

        return redirect('/admin/gallery')->with('status', 'Data di Simpan!');
    }
}
