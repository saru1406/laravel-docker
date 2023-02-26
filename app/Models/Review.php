<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function bar()
    {
        return $this->belongsTo('App\Models\Bar');
    }

    public function review_comments()
    {
        return $this->hasMany('App\Models\ReviewComment');
    }
}
