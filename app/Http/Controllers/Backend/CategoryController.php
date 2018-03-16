<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
use Session;
use DB;

class CategoryController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $categories = DB::table('categories')->paginate($this->limit);
      return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
		Category::create($request->all());
		
		return redirect()->route('categories.index')->with('message', 'Kategori berhasil di buat!.');		
    }

    public function saveCategory(CategoryRequest $request)
	{
		return Category::create($request->all());
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $category = Category::find($id);
      return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $categories = Category::find($id);
        $data       = $request->only(['name', 'parent_id', 'slug']);
        $categories -> update($data);

        Session::flash('flash_notification', [
                       'level'=>'info',
                       'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4>Category '.$categories->title.' telah di Update.'
                      ]);
         return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $categories = Category::find($id);
      $categories->delete();

      Session::flash('flash_notification', [
                     'level'=>'danger',
                     'message'=>'<h4><i class="icon fa fa-trash-o"></i> Berhasil !</h4>Category '.$categories->title.' telah di Hapus.'
                                ]);
      return redirect(route('categories.index'));
    }
}
