<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightUsers extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'airlines_id',
        'destinations_id',
        'airline_name',
        'destination_name',
        'name',
        'count_people',
        'amount'
    ];



    public function destinations()
    {
        return $this->belongsTo(FlightUsers::class,'destinations_id');
    }

    public function airlines()
    {
        return $this->belongsTo(FlightUsers::class,'airlines_id');
    }
}