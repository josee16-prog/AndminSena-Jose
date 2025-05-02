<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class apprentice extends Model
{
    //
    public function computer(){
        return $this->belongsTo(computer::class);
    }

    public function course(){
        return $this->belongsTo(course::class);
    }
}
