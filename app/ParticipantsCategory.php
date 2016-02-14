<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Participants;

class ParticipantsCategory extends Model
{
    protected $fillable = ['year', 'title', 'slug'];

    public function participants()
    {
    	return $this->hasMany('App\Participants', 'category_id');
    }
}
