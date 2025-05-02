<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    public function apprentices(){
        return $this->hasMany(apprentice::class);
    }

    public function training_center(){
        return $this->belongsTo(training_center::class);
    }
    public function area(){
        return $this->belongsTo(area::class);
    }
    public function teachers(){
        return $this->belongsToMany(teacher::class);
    }
}
