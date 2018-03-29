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
    public function index(Request $request)
    {
		$onlyTrashed = FALSE;

		if (($status = $request->get('status')) && $status == 'trash')
		{
			$posts       = Post::onlyTrashed()->with('category','author')->latest()->paginate($this->limit);
			$postCount   = Post::onlyTrashed()->count();
			$onlyTrashed = TRUE;

		}	
		elseif ($status == 'published') 
		{
			$posts       = Post::published()->with('category','author')->latest()->paginate($this->limit);
			$postCount   = Post::published()->count();
		}
		elseif ($status == 'scheduled') 
		{
			$posts       = Post::scheduled()->with('category','author')->latest()->paginate($this->limit);
			$postCount   = Post::scheduled()->count();
		}
		elseif ($status == 'draft') 
		{
			$posts       = Post::draft()->with('category','author')->latest()->paginate($this->limit);
			$postCount   = Post::draft()->count();
		}

		else 
		{
			$posts       = Post::with('category','author')->latest()->paginate($this->limit);
			$postCount   = Post::count();
		}

		$statusList = $this->statusList();


        return view('backend.blog.index', compact('posts', 'postCount', 'onlyTrashed', 'statusList'));
    }

	private function statusList()
	{
		return [
			'all'       => Post::count(),
			'published' => Post::published()->count(),
			'scheduled' => Post::scheduled()->count(),
			'draft'     => Post::draft()->count(),
			'trash'     => Post::onlyTrashed()->count()
		];
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
      $post     = Post::find($id);
	  $oldImage = $post->image;
      $data     = $this->handleRequest($request);
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
        Post::findOrFail($id)->delete();

        return redirect('route'('blog.index'))->with('trash-message', ['Post masuk tempat sampah', $id]);
    }

	public function restore($id)
	{
		$post = Post::withTrashed()->findOrFail($id);
		$post->restore();

		return redirect()->back()->with('message', 'Post berhasil di restore');
	}

	public function forceDestroy($id)
	{
		$post = Post::withTrashed()->findOrFail($id);
		$post->forceDelete();

		$this->deleteImage($post->image);

		return redirect('backend/blog?status=trash')->with('message', 'Postiingan berhasil di hapus!!');
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

    public function deleteImage($image)
    {
		if(! empty($image)) 
		{
			$imagePath     = $this->uploadPath . '/' . $image;
			$ext           = substr(strrchr($image, '.'), 1);
			$thumbnail     = "thumb_". $image;
			$thumbnailPath = $this->uploadPath . '/' . $thumbnail;

			if( file_exists($imagePath) ) unlink($imagePath);
			if( file_exists($thumbnailPath) ) unlink($thumbnailPath);
		}
    }
}
