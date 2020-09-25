<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class SiteMapController extends Controller
{
    public function index() {
        $post = DB::table('tbl_post')
                ->orderBy('update_at', 'DESC')
                ->get();
        return response()->view('sitemap.index', [
            'article' => $articles,
            'category' => $categories,
            'subcategory' => $subcategories,
            'tag' => $tags,
        ])->header('Content-Type', 'text/xml');
      }
  
      public function articles() {
         $article = Post::latest()->get();
         return response()->view('sitemap.article', [
             'article' => $article,
         ])->header('Content-Type', 'text/xml');
     }
  
     public function categories() {
         $category = Category::all();
         return response()->view('sitemap.category', [
             'category' => $category,
         ])->header('Content-Type', 'text/xml');
     }
     
     public function subcategories() {
         $subcategory = Subcategory::all();
         return response()->view('sitemap.subcategory', [
             'subcategory' => $subcategory,
         ])->header('Content-Type', 'text/xml');
     }
  
     public function tags() {
         $tag = Tag::all();
         return response()->view('sitemap.tag', [
             'tag' => $tag,
         ])->header('Content-Type', 'text/xml');
     }
}
