<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Post;
use App\User;

use Intervention\Image\Facades\Image;
use File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Session;

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
        
        $posts = Post::latest()->paginate($this->limit);
        return view('backend.blog.index', compact('posts'));
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

		$newPost = $request->user()->posts()->create($data);

		Session::flash('flash_notification', [
			'level'   => 'success',
			'message' => '<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Post '.$newPost->title.' telah di Tambah.'
		]);

    	return redirect(route('blog.index'));
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

      Session::flash('flash_notification', [
          'level'=>'info',
          'message'=>'<h4><i class="icon fa fa-check"></i> Berhasil !</h4> Post '.$post->title.' telah di Update.'
      ]);

      return redirect(route ('blog.index'));
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

         Session::flash('flash_notification', [
            'level'=>'danger',
            'message'=>'<h4><i class="icon fa fa-trash-o"></i>  !</h4> Post '.$post->title.' telah di hapus.'
        ]);
        return redirect('route'('blog.index'));
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
			$fileName  = str_random(40) . '.' . $extension;
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
