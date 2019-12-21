<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeIncident extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type'
    ];
    // function incident() {
    //     return $this->belongsTo(Incidents::class);
    // }

}
