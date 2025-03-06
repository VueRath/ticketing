<?php

namespace App\Http\Livewire\Destination;

use App\Models\Airlines;
use App\Models\Destination;
use Livewire\Component;

class Information extends Component
{
    public $airline_id, $destination_id; 
    public $airline = 
    [
        "Australia" => 1,
        "Bahrain" => 2,
        "Brunei" => 3,
        "Cambodia" => 4,
        "Canada" => 5,
        "China" => 6,
        "Philippines" => 7,
        "Egypt" => 8,
        "India" => 9,
        "Zalzala Koh" => 10
    ];

    public $destination = 
    [
        "France" => 1,
        "Germany" => 2,
        "Greece" => 3,
        "Guam" => 4,
        "Hong Kong" => 5,
        "Indonesia" => 6,
        "Israel" => 7,
        "Malaysia" => 8,
        "Vietnam" => 9,
        "Thailand" => 10
    ];

    public function updateAirlineName($value)
    {
        $this->airline_id = $this->airline[$value] ?? null;
    }

    public function updateDestinationName($value)
    {
        $this->destination_id = $this->destination[$value] ?? null;
    }

    
    public function render()
    {
        return view('livewire.destination.information',
    [
        'airlines' => Airlines::all(),
        'destinations' => Destination::all()
        ]);
    }
}
