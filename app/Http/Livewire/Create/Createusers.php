<?php

namespace App\Http\Livewire\Create;

use App\Models\FlightUsers;
use Dotenv\Exception\ValidationException;
use Illuminate\Validation\ValidationException as ValidationValidationException;
use Livewire\Component;

class Createusers extends Component
{

    /*
        'airlines_id',
        'destinations_id',
        'airline_name',
        'destination_name',
        'name',
        'count_people',
        'amount'
    */

    public $airlines_id, $destinations_id, $airline_name, $destination_name;

    public $name;
    public $count_people, $amount;

    protected $rules = 
    [
        'airlines_id' => 'required|integer',
        'destinations_id' => 'required|integer',
        'destination_name' => 'required|string|max:255',
        'airline_name' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'count_people' => 'required|integer',
        'amount' => 'required|integer',
    ];

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
        $this->airlines_id = $this->airline[$value] ?? null;
        $this->airline_name = $value;
    }

    public function updateDestinationName($value)
    {
        $this->destinations_id = $this->destination[$value] ?? null;
        $this->destination_name = $value;
    }

    public function save()
    {
        $this->validate();
        

        if (!$this->airlines_id || !$this->destinations_id) {
            session()->flash('error', 'Please select an airline and destination.');
            return;
        }

         try {
            FlightUsers::create([
                'airlines_id' => $this->airlines_id,
                'destinations_id' => $this->destinations_id,
                'airline_name' => $this->airline_name,
                'destination_name' => $this->destination_name,
                'name' => $this->name,
                'count_people' => $this->count_people,
                'amount' => $this->amount,
            ]);

            session()->flash('message', 'User created successfully!');

            $this->reset(['airlines_id', 'destinations_id', 'airline_name', 'destination_name', 'name', 'count_people', 'amount']);

            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            throw ValidationValidationException::withMessages(['error' => 'Failed to save user.']);
        }
    }


    public function render()
    {
        return view('livewire.create.createusers');
    }
}
