<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name', 'surname', 'location', 'phoneNumber', 'socialNetwork', 'email'];

    public function accommodations(){
        return $this->hasMany('App\Accommodation');
    }

    public function fullName(){
        return $this->name.$this->surname;
    }
}
