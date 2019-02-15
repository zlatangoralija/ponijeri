<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    protected $fillable = ['id', 'name', 'description', 'capacity', 'numberOfRooms', 'numberOfBeds', 'headerImage', 'wifi', 'parking', 'tv', 'pets', 'furnace', 'centralHeating', 'barbecue', 'parking', 'type_id', 'contact_id'];

    public function contacts(){
        return $this->belongsTo('App\Contact', 'contact_id');
    }

    public function types(){
        return $this->belongsTo('App\Type', 'type_id');
    }
}
