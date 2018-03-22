<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

//    public function setTitleAttribute($value)
//    {
//    	$this->attributes['name'] = $value;
//    	$this->attributes['slug']  = str_slug($value);
//    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
