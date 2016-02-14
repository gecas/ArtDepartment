<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;

class masterclassForm extends Model
{
    protected $fillable = ['id', 'name', 'surname', 'email', 'phone',
     'birth_date', 'country_id', 'education', 'description', 'company', 'challenge',
     'features', 'heroes', 'city', 'address', 'thought', 'topics', 'cv_name',
     'cv_path', 'picture_name', 'picture_path', 'portfolio_name', 'portfolio_path',
     'portfolio_link'];

    public function country()
    {
    	return $this->belongsTo('App\Country');
    }
}
