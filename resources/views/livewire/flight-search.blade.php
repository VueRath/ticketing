<div class="bg-white p-4 rounded-lg shadow-lg">
    <form wire:submit.prevent="searchFlights" class="flex space-x-2 items-center">
        <select wire:model="tripType" class="p-3 border rounded w-2/6">
            <option value="one-way">One Way</option>
            <option value="round-trip">Round Trip</option>
        </select>
        <input type="text" wire:model="departure" class="p-3 border rounded w-full" placeholder="From">
        <input type="text" wire:model="destination" class="p-3 border rounded w-full" placeholder="To">
        <input type="date" wire:model="departureDate" class="p-3 border rounded w-1/6">
        <input type="date" wire:model="returnDate" class="p-3 border rounded w-1/6" placeholder="Return Date" {{ $tripType == 'one-way' ? 'disabled' : '' }}>
        <button type="submit" class="bg-blue-600 text-white px-4 py-3 rounded">Search</button>
    </form>

    @if ($flights)
        <div class="mt-6">
            <h2 class="text-lg font-bold">Available Flights:</h2>
            <ul>
                @foreach ($flights as $flight)
                    <li class="p-2 border-b">{{ $flight->departure }} to {{ $flight->destination }} - {{ $flight->departure_date }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
