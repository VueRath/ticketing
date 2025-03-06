<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="bg-blue-600 text-black py-12">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-4xl font-bold">Find Cheap Flights</h1>
            <p class="mt-2">Compare and book flights with ease</p>
            <div class="mt-6 bg-white p-4 rounded-lg shadow-lg max-w-6xl mx-auto">
                <form class="flex space-x-2 items-center">
                    <select id="tripType" class="p-3 border rounded w-1/6">
                        <option value="one-way">One Way</option>
                        <option value="round-trip">Round Trip</option>
                    </select>
                    <input type="text" id="fromInput" placeholder="From" class="p-3 border rounded w-1/5">
                    <button type="button" id="swapButton" class="p-3 border rounded bg-gray-300">⇆</button>
                    <input type="text" id="toInput" placeholder="To" class="p-3 border rounded w-1/5">
                    <input type="date" class="p-3 border rounded w-1/6" onfocus="this.type='date'" onblur="this.type='text'" placeholder="Departure">
                    <input type="date" id="returnDate" class="p-3 border rounded w-1/6 hidden" onfocus="this.type='date'" onblur="this.type='text'" placeholder="Return Date">

                    <div class="relative w-1/6">
                        <div class="p-3 border rounded w-full text-left bg-white cursor-pointer" id="travelerContainer">
                            <span id="travelerBtn">Adult</span>
                            <div id="travelerDropdown" class="absolute hidden bg-white shadow-lg p-4 rounded w-full">
                                <div class="flex justify-between items-center">
                                    <span>Adults</span>
                                    <div class="flex items-center space-x-2">
                                        <button type="button" class="px-2 py-1 bg-gray-200 rounded" onclick="decreaseCount('adultCount')">-</button>
                                        <span id="adultCount">1</span>
                                        <button type="button" class="px-2 py-1 bg-gray-200 rounded" onclick="increaseCount('adultCount')">+</button>
                                    </div>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <span>Children</span>
                                    <div class="flex items-center space-x-2">
                                        <button type="button" class="px-2 py-1 bg-gray-200 rounded" onclick="decreaseCount('childCount')">-</button>
                                        <span id="childCount">0</span>
                                        <button type="button" class="px-2 py-1 bg-gray-200 rounded" onclick="increaseCount('childCount')">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <select class="p-3 border rounded w-1/6">
                        <option>Economy</option>
                        <option>Business</option>
                        <option>First Class</option>
                    </select>

                    <button class="bg-blue-600 text-white px-4 py-3 rounded">Search</button>
                </form>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-12">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200 text-center">Popular Flight Deals</h2>
        <div class="mt-6 relative">
            <div id="flight-slider" class="flex space-x-4 overflow-x-auto">
                <div class="min-w-[300px] bg-white shadow-lg rounded-lg p-4">
                    <img src="https://via.placeholder.com/300" class="w-full h-40 object-cover rounded-md">
                    <h3 class="text-lg font-semibold mt-2">Manila to Cebu</h3>
                    <p class="text-gray-500">0h 50m Direct - March 15, 2025</p>
                </div>
                <div class="min-w-[300px] bg-white shadow-lg rounded-lg p-4">
                    <img src="https://via.placeholder.com/300" class="w-full h-40 object-cover rounded-md">
                    <h3 class="text-lg font-semibold mt-2">Manila to Davao</h3>
                    <p class="text-gray-500">1h 45m Direct - March 20, 2025</p>
                </div>
                <div class="min-w-[300px] bg-white shadow-lg rounded-lg p-4">
                    <img src="https://via.placeholder.com/300" class="w-full h-40 object-cover rounded-md">
                    <h3 class="text-lg font-semibold mt-2">Cebu to Boracay</h3>
                    <p class="text-gray-500">1h 00m Direct - March 20, 2025</p>
                </div>
                <div class="min-w-[300px] bg-white shadow-lg rounded-lg p-4">
                    <img src="https://via.placeholder.com/300" class="w-full h-40 object-cover rounded-md">
                    <h3 class="text-lg font-semibold mt-2">Manila to Palawan</h3>
                    <p class="text-gray-500">0h 35m Direct - March 20, 2025</p>
                </div>
            </div>
            <button id="prevSlide" class="absolute left-0 bg-gray-200 p-2 rounded-full"><</button>
            <button id="prevSlide" class="absolute right-0 bg-gray-200 p-2 rounded-full">></button>
        </div>
    </div>

    <footer class="bg-white text-center py-6 shadow-md mt-12">
        <p class="text-gray-600">&copy; 2025 CheapFlights Clone. All rights reserved.</p>
    </footer>

    <script>
        function increaseCount(id) {
            let count = document.getElementById(id);
            count.innerText = parseInt(count.innerText) + 1;
            updateTravelerButton();
        }
        function decreaseCount(id) {
            let count = document.getElementById(id);
            if (parseInt(count.innerText) > 0) {
                count.innerText = parseInt(count.innerText) - 1;
                updateTravelerButton();
            }
        }
        function updateTravelerButton() {
            let adults = document.getElementById('adultCount').innerText;
            let children = document.getElementById('childCount').innerText;
            document.getElementById('travelerBtn').innerText = `${adults} Adult(s), ${children} Child(ren)`;
        }
        function closeTravelerDropdown() {
            document.getElementById('travelerDropdown').classList.add('hidden');
        }
        document.getElementById('travelerContainer').addEventListener('click', function() {
            document.getElementById('travelerDropdown').classList.toggle('hidden');
        });
        document.getElementById('swapButton').addEventListener('click', function() {
            let fromInput = document.getElementById('fromInput');
            let toInput = document.getElementById('toInput');
            let temp = fromInput.value;
            fromInput.value = toInput.value;
            toInput.value = temp;
        });
        document.getElementById('tripType').addEventListener('change', function() {
            let returnDateInput = document.getElementById('returnDate');
            returnDateInput.classList.toggle('hidden', this.value === 'one-way');
        });
    </script>
</x-app-layout>
