<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	public function getEventWorkshops()
    {
        return $this->hasMany('App\Models\Workshop', 'event_id', 'id');
    }

    public function getFutureEventWorkshops()
    {
        return $this->hasMany('App\Models\Workshop', 'event_id', 'id');
    }
}
