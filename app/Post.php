<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['author_id', 'title', 'slug', 'body', 'image', 'category_id'];

    public function author()
    {
    	return $this->belongsTo(User::class);
    }

    public function category()
    {
    	return $this->belongsTo(category::class);
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


    public function getImageThumbAttribute($value)
    {
		$imageThumb = "";

		if ( ! is_null($this->image) ) {
			$imagePath = public_path() . "/f-n/images/blogs/" . $this->image;
			if ( file_exists($imagePath)) $imageThumb = asset('f-n/images/blogs/thumb_'. $this->image);
		}

		return $imageThumb;

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

    public function getTitleTableAttribute()
    {
      return substr($this->title,0,30);
    }

    public function getCreatedAtAttribute()
    {
      return \Carbon\Carbon::parse($this->attributes['created_at'])->format('d-M-Y');
    }
}
