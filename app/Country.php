<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\masterclassForm;

class Country extends Model
{
	protected $fillable=['title'];
	
    public function masterclass()
    {
    	return $this->hasMany('App\masterclassForm');
    }
}
