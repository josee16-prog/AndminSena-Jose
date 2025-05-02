<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
    //
    public function apprentice(){
        return $this->hasOne(apprentice::class);
    }
}
