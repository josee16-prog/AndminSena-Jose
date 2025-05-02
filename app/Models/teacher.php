<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    //
    public function area(){
        return $this->belongsTo(area::class);
    }
    public function trainig_center(){
        return $this->belongsTo(training_center::class);
    }
    public function courses(){
        return $this->belongsToMany(course::class);
    }
}
