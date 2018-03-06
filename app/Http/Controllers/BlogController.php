<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class BlogController extends Controller
{
  protected $limit = 5;
  public function blog()
  {
    $posts = Post::orderBy('created_at', 'asc')->paginate(8);
    return view('blog.index', compact('posts'));
  }

  public function detailpost($slug)
  {
    $categories = Category::All();
    $detailpost = Post::where('slug', $slug)->first();
    $postTerakhir = Post::latest()->paginate($this->limit);
    return view('blog.detailPost', compact('detailpost', 'categories', 'postTerakhir'));
  }
}
