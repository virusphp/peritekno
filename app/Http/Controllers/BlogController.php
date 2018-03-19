<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;
use App\Category;
use App\User;

class BlogController extends Controller
{
	protected $limit = 4;

	public function blog()
	{
//		\DB::enableQueryLog();
		$posts = Post::with('author')->latest()->published()->paginate($this->limit);

		return view('blog.index', compact('posts'));
//		dd(\DB::getQueryLog());
	}

	public function show(Post $detailpost)
	{
		return view('blog.detailPost', compact('detailpost', 'categories'));
	}

	public function category(Category $category)
	{
		$categoryName = $category->name;

		$posts = $category->posts()
						  ->with('author')
						  ->latest()
						  ->published()
						  ->paginate($this->limit);

		return view('blog.index', compact('posts', 'categoryName'));
	}

	public function author(User $author)
	{
		$authorName = $author->name;
		
		$posts = $author->posts()
						  ->with('category')
						  ->latest()
						  ->published()
						  ->paginate($this->limit);

		return view('blog.index', compact('posts', 'authorName'));
	}
}
