<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function workshops()
    {
        return $this->hasMany(Workshop::class, 'event_id', 'id');
    }

    public function getFutureWorkshops()
    {
        return $this->hasMany(Workshop::class, 'event_id', 'id')->whereDate('start', '>=', date('Y-m-d'));
    }
}
