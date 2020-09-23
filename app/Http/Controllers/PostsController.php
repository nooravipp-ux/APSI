<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
        $path_img = $request->file('banner')->getRealPath();
        $file_img = base64_encode(file_get_contents($path_img));
        DB::table('tbl_post')->insert(
            ['title' => $request->title, 'slug' => $slug,'article' => $request->article, 'banner' => $file_img, 'author_id' => $author_id, 'kategori_id' => $request->kategori]
        );

        return redirect('/admin/posts');
    }
}
