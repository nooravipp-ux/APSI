<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use DB;
class GalleryController extends Controller
{
    public function gallery(){
        $data_img = DB::table('tbl_gallery')->get();

        return view('admin.gallery.gallery', compact('data_img'));
    }

    public function upload_gambar(Request $req){

        $image = $req->file('img');
        $extension = $image->getClientOriginalExtension();
        Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));
        
        DB::table('tbl_gallery')->insert(
            ['gambar' => $image->getFilename().'.'.$extension, 'original_file_name' => $image->getClientOriginalName(), 'mime' => $image->getClientMimeType(), 'title' => $req->title, 'created_at' => date('Y-m-d')]
        );

        return redirect('/admin/gallery')->with('status', 'Data di Simpan!');
    }

    public function delete($id){
        $image = DB::table('tbl_gallery')->where('id', $id)->first();
        $file = $image->gambar;
        $filename = public_path().'/uploads/'.$file;
        File::delete($filename);

        DB::table('tbl_gallery')->where('id', $id)->delete();
        return redirect('/admin/gallery')->with('status', 'Data di Hapus!');
    }
}
