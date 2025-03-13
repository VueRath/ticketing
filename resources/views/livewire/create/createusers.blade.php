<div class="p-6 max-w-2xl mx-auto bg-gray-800 rounded-lg shadow-lg">
    <h2 class="text-2xl text-gray-200 font-semibold mb-4">Create User</h2>

    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="airlines_id" class="block text-sm text-gray-300">Airline ID</label>
            <input type="text" id="airlines_id" wire:model="airlines_id" readonly
                   class="w-full p-2 rounded bg-gray-900 text-gray-400 border border-gray-700 focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="destinations_id" class="block text-sm text-gray-300">Destination ID</label>
            <input type="text" id="destinations_id" wire:model="destinations_id" readonly
                   class="w-full p-2 rounded bg-gray-900 text-gray-400 border border-gray-700 focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="airline_name" class="block text-sm text-gray-300">Airline Name</label>
            <input type="text" id="airline_name" wire:model="airline_name" readonly
                   class="w-full p-2 rounded bg-gray-900 text-gray-400 border border-gray-700 focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="destination_name" class="block text-sm text-gray-300">Destination Name</label>
            <input type="text" id="destination_name" wire:model="destination_name" readonly
                   class="w-full p-2 rounded bg-gray-900 text-gray-400 border border-gray-700 focus:outline-none">
        </div>

        <div class="mb-4">
            <label for="name" class="block text-sm text-gray-300">Passenger Name</label>
            <input type="text" id="name" wire:model="name"
                   class="w-full p-2 rounded bg-gray-900 text-gray-200 border border-gray-700 focus:outline-none focus:ring focus:border-blue-500">
            @error('name') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="count_people" class="block text-sm text-gray-300">Number of People</label>
            <input type="number" id="count_people" wire:model="count_people"
                   class="w-full p-2 rounded bg-gray-900 text-gray-200 border border-gray-700 focus:outline-none focus:ring focus:border-blue-500">
            @error('count_people') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="amount" class="block text-sm text-gray-300">Total Amount</label>
            <input type="number" id="amount" wire:model="amount"
                   class="w-full p-2 rounded bg-gray-900 text-gray-200 border border-gray-700 focus:outline-none focus:ring focus:border-blue-500">
            @error('amount') <span class="text-sm text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 focus:outline-none focus:ring">
                Save
            </button>
        </div>
    </form>
</div>
