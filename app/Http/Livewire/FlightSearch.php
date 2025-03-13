<?php

namespace App\Http\Livewire;

use App\Models\flights;
use Livewire\Component;
use App\Models\Flight;

class FlightSearch extends Component
{
    public $tripType = 'one-way';
    public $departure;
    public $destination;
    public $departureDate;
    public $returnDate;
    public $passengers = 1;
    public $classType = 'Economy';
    public $flights = [];

    public function searchFlights()
    {
        $this->flights = flights::where('departure', $this->departure)
            ->where('destination', $this->destination)
            ->whereDate('departure_date', $this->departureDate)
            ->get();
    }

    public function render()
    {
        return view('livewire.flight-search');
    }
}
