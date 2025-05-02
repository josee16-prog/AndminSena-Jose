<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
    //
    public function courses(){
        return $this->hasMany(course::class);
    }
    public function teachers(){
        return $this->hasMany(teacher::class);
    }
}
