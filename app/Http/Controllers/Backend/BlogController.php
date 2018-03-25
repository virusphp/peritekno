<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

use Intervention\Image\Facades\Image;
use File;
//use Symfony\Component\HttpFoundation\File\UploadedFile;
use Session; 
use App\Post;
use App\User;
use App\Category;

class BlogController extends BackendController
{
    protected $uploadPath;

    public function __construct()
    {
        parent::__construct();
        $this->uploadPath = config('cms.image.directory');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $posts = Post::with('category','author')->latest()->paginate($this->limit);
		$postCount = Post::count();
        return view('backend.blog.index', compact('posts', 'postCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Post $post)
    {
        return view('backend.blog.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
		$data = $this->handleRequest($request);
//		dd($data);
		$newPost = $request->user()->posts()->create($data);

    	return redirect(route('blog.index'))->with('message', 'Post berhasil dibuat!!');
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
      $post= Post::find($id);

      return view('backend.blog.edit', compact('post'));
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
      $post = Post::find($id);
	  $oldImage = $post->image;
      $data = $this->handleRequest($request);

      $post->update($data);
	  if ($oldImage !== $post->image) {
			$this->deleteImage($oldImage);
	  }

      return redirect(route ('blog.index'))->with('message', 'Post berhasil di update!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $data['image'] = $this->deleteImage($post->image);
        $post->delete();

        return redirect('route'('blog.index'))->with('trash-message', ['Post masuk tempat sampah', $id]);
    }

	public function restore($id)
	{
		$post = Post::withTrashed()->findOrFail($id);
		$post->restore();

		return redirect()->route('blog.index')->with('message', 'Post berhasil di restore');

	}
    public function handleRequest($request)
    {
		// ini bisa di ganti only kalo mas pingin only
      	$data = $request->all();

		if ($request->hasFile('image')) {

			$width     = config('cms.image.thumbnail.width');
			$height    = config('cms.image.thumbnail.height');
			$image     = $request->file('image');
			$extension = $image->guessClientExtension();
			$fileName  = 'blogs_' . str_random(10) . '_' .$data['slug'] . '.' . $extension;
			$destination = $this->uploadPath;

			$successUpload = Image::make($image->getRealPath())
				->resize(1920, 920)->save($destination . "/" . $fileName);

			if ($successUpload)
			{
				$thumbnail = "thumb_". $fileName;
				Image::make($image->getRealPath())
					->resize($width,$height)
					->save($destination . "/" . $thumbnail);
			}

			$data['image'] = $fileName;
		}

		return $data;
    }

    public function deleteImage($filename)
    {
        $path = public_path() . DIRECTORY_SEPARATOR . 'f-n/images/blogs'
            . DIRECTORY_SEPARATOR . $filename;
        $thumbnail = base_path() . '/public/f-n/images/blogs/thumb_'.$filename;

        return File::delete($path, $thumbnail);
    }
}
