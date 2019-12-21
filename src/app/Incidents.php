<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Incidents extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'criticality', 'type_incident_id', 'status'
    ];

    public function type()
    {
        return $this->hasOne(TypeIncident::class, 'id', 'type_incident_id');
        // return $this->hasOne('App\TypeIncident');
    }

}
