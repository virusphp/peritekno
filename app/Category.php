<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];

    public function setTitleAttribute($value)
    {
      $this->attributes['slug']  = str_slug($value);
    }
}
