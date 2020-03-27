<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    public function assignee()
    {
        return $this->belongsTo('App\Models\Assignee');
    }
}
