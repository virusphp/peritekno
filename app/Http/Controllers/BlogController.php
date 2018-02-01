<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
  public function blog()
  {
    $blogs = Post::orderBy('created_at', 'asc')->paginate(8);
    return view('blog.index', compact('blogs'));
  }

  public function detailpost($slug)
  {
    $detailpost = Post::where('slug', $slug)->first();
    return view('blog.detailPost', compact('detailpost'));
  }
}
