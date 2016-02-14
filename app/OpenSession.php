<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpenSession extends Model
{
    protected $fillable = ['name', 'surname', 'email', 'company', 'address', 'expertise', 'city', 'phone', 'training'];
}
