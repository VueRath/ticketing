<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'destinations_id',
        'name'
    ];

    public function AirlineClass()
    {
        return $this->belongsTo(Airlines::class,'airlines_id');
    }

    public function FlightUsersClass()
    {
        return $this->hasMany(FlightUser::class);
    }
}
