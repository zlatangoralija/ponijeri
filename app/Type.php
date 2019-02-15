<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name', 'description'];

    public function accommodations(){
        return $this->hasMany('App\Accommodation');
    }
}
