<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ParticipantsCategory;

class Participants extends Model
{
	protected $fillable = ['name', 'picture_text', 'picture_name', 'picture_path', 'category_id'];
   
    public function category()
    {
    	return $this->belongsTo('App\ParticipantsCategory');
    }
    
}
