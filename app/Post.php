<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['author_id', 'title', 'slug', 'body', 'image'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getImagePathAttribute()
    {
        if ($this->image !== NULL)
        {
            return url('/f-n/images/blogs/' . $this->image);
        } else {
            return url('/f-n/images/blogs/noimages.jpg');
        }
    }

    public function getImageTumbAttribute()
    {
        if ($this->image !== NULL)
        {
            return url('/f-n/images/blogs/tumb_' . $this->image);
        } else {
            return url('/f-n/images/blogs/noimages.jpg');
        }
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
}
