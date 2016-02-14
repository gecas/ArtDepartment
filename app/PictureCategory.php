<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Picture;

class PictureCategory extends Model
{
	protected $fillable = ['id', 'title', 'slug'];

    public function photos()
    {
    	return $this->hasMany('App\Picture', 'category_id');
    }
}
