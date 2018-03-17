<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class BlogController extends Controller
{
	protected $limit = 4;

	public function blog()
	{
//		\DB::enableQueryLog();
		$posts = Post::latest()->published()->paginate($this->limit);

		return view('blog.index', compact('posts'));
//		dd(\DB::getQueryLog());
	}

	public function detailpost($slug)
	{
		$detailpost = Post::with('author')->where('slug', $slug)->first();

		return view('blog.detailPost', compact('detailpost'));
	}
}
