<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PictureCategory;

class Picture extends Model
{
	protected $fillable = ['photo_path', 'photo_name', 'photo_name_tn', 'category_id'];

    public function category()
    {
    	return $this->belongsTo('App\PictureCategory', 'category_id');
    }
}
