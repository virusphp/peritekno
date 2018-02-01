<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use App\User;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\Facades\Image;
use File;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('backend.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
      $data = $request->only(['title', 'body', 'slug', 'author_id']);

      if ($request->hasFile('image'))
      {
          $data['image'] = $this->saveImage($request->file('image'));

      }

      $posts = Post::create($data);
      Session::flash('flash_notification', [
          'level'=>'success',
          'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Post '.$posts->title.' telah di Tambah.'
      ]);

      return redirect(route ('posts.index'));
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
      $posts = Post::find($id);
      return view('backend.posts.edit', compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {
      $posts = Post::find($id);
      $data = $request->only(['title', 'body', 'slug', 'author_id']);

      if ($request->hasFile('image'))
      {
          $data['image'] = $this->saveImage($request->file('image'));
          if ($posts->image !== '') $this->deleteImage($posts->image);

      }

      $posts->update($data);
      Session::flash('flash_notification', [
          'level'=>'info',
          'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Post '.$posts->title.' telah di Update.'
      ]);

      return redirect(route ('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts  = Post::find($id);
        $data['image'] = $this->deleteImage($posts->image);
        $posts->delete();

         Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<h4><i class="icon fa fa-trash-o"></i>  !</h4> Post '.$posts->title.' telah di hapus.'
        ]);
        return redirect('route'('posts.index'));
    }

    public function saveImage(UploadedFile $image)
    {
        $extension = $image->guessClientExtension();
        $filename = str_random(40) . '.' . $extension;
        $img = Image::make($_FILES['image']['tmp_name']);
        $img->resize(1920, 920);
        $path_dir = base_path() . '/public/f-n/images/blogs/'.$filename;
        $success = $img->save($path_dir);

        if ($success)
        {
           $img = Image::make($_FILES['image']['tmp_name']);
           $img->resize(272, 203);
           $thumbnail = base_path() . '/public/f-n/images/blogs/tumb_'.$filename;
           $img->save($thumbnail);
        }
        return $filename;
    }

    public function deleteImage($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'f-n/images/blogs'
            . DIRECTORY_SEPARATOR . $filename;
       $thumbnail = base_path() . '/public/f-n/images/blogs/tumb_'.$filename;

        return File::delete($path, $thumbnail);
    }
}
