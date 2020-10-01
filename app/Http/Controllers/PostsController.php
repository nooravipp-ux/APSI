<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;
class PostsController extends Controller
{
    public function post(){
        $posts = DB::table('tbl_post')->paginate(10);;
        return view('admin.posts.posts', compact('posts'));
    }

    public function create_post(){
        $kategori = DB::table('tbl_kategori')->get();
        return view('admin.posts.create_post', compact('kategori'));
    }

    public function save_post(Request $request){
        $author_id = Auth::user()->id;
        $slug = Str::slug(strtolower($request->title), '-');

        $banner = $request->file('banner');
        $extension = $banner->getClientOriginalExtension();
        Storage::disk('public')->put($banner->getFilename().'.'.$extension,  File::get($banner));

        DB::table('tbl_post')->insert(
            ['title' => $request->title, 'slug' => $slug,'article' => $request->article, 'banner_name' => $banner->getFilename().'.'.$extension, 'mime' => $banner->getClientMimeType(), 'original_banner_name' => $banner->getClientOriginalName(), 'author_id' => $author_id, 'kategori_id' => $request->kategori, 'publish' => $request->publish, 'headline' => $request->headline]
        );

        return redirect('/admin/posts');
    }

    public function delete($id){
        $image = DB::table('tbl_post')->where('post_id', $id)->first();
        $file = $image->banner_name;
        $filename = public_path().'/uploads/'.$file;
        File::delete($filename);

        DB::table('tbl_post')->where('post_id', $id)->delete();
        return redirect('/admin/posts')->with('status', 'Data di Hapus!');
    }
}
