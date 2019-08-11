<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{

    public function visitor() {
        return $this->belongsTo('App\User');
    }
}
