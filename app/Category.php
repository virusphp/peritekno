<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'parent_id', 'slug'];

    public function setTitleAttribute($value)
    {
      $this->attributes['title'] = $value;
      $this->attributes['slug']  = str_slug($value);
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }
}
