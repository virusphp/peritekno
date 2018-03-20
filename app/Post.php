<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;

class Post extends Model
{
    protected $fillable = ['author_id', 'title', 'slug', 'body', 'image', 'category_id'];
	protected $dates = ['published_at'];

    public function author()
    {
    	return $this->belongsTo(User::class);
    }

    public function category()
    {
    	return $this->belongsTo(Category::class);
    }

    public function getImageUrlAttribute($value)
    {
		$imageUrl = "";

		if ( ! is_null($this->image) ) {
			$imagePath = public_path() . "/f-n/images/blogs/" . $this->image;
			if ( file_exists($imagePath)) $imageUrl = asset('f-n/images/blogs/'. $this->image);
		}

		return $imageUrl;

    }

    public function getImageThumbUrlAttribute($value)
    {
		$imageThumbUrl = "";

		if ( ! is_null($this->image) ) {
			$imagePath = public_path() . "/f-n/images/blogs/" . $this->image;
			if ( file_exists($imagePath)) $imageThumbUrl = asset('f-n/images/blogs/'. $this->image);
		}

		return $imageThumbUrl;
    }


    public function setTitleAttribute($value)
    {
    	$this->attributes['title'] = $value;
    	$this->attributes['slug']  = str_slug($value);
    }

    public function getBodyTableAttribute()
    {
      return substr($this->body,0,30);
    }

    public function getBodyHtmlAttribute($value)
    {
      return $this->body === Markdown::convertToHtml(e($this->body)) ? $this->body : $this->body ? Markdown::convertToHtml(e($this->body)) : NULL ;
    }

    public function getTitleTableAttribute()
    {
      return substr($this->title,0,30);
    }

    public function getDateAttribute($value)
    {
      return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }

	public function scopePublished($query)
	{
		return $query->where("published_at", "<=", Carbon::now());
	}

	public function scopePopular($query)
	{
		return $query->orderBy('view_count', 'desc');
	}

}
