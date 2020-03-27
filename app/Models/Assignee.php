<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assignee extends Model
{
    public function todos(){
        return $this->hasMany('App\Models\Todo');
    }
}
