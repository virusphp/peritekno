<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function category($slug)
    {
        $category = Category::where('slug', $slug)
                    ->first()
                    ->posts()
                    ->paginate(8);
        
        return view('category.index', compact('category'));
    }
}
