<body class="m-0 p-0 w-full overflow-x-hidden"></body>

<div class="bg-gray-500 text-black py-14 w-screen absolute left-0 right-0">
        <div class="w-full text-center">
            <h1 class="text-4xl font-bold">Find Cheap Flights</h1>
            <p class="mt-2">Compare and book flights with ease</p>
            <div class="mt-6 bg-white p-4 rounded-lg shadow-lg max-w-7xl mx-auto">
                <form class="flex space-x-2 items-center">
                    <select id="tripType" class="p-3 border rounded w-2/6">
                        <option value="one-way">One Way</option>
                        <option value="round-trip">Round Trip</option>
                    </select>
                    <select id="airlines_id" wire:model="airlines_id" class="w-full p-2 rounded bg-gray-900 text-gray-200 border border-gray-700 focus:outline-none focus:ring focus:border-blue-500 appearance-none">
                        <option value="">--- From --</option>
                        @foreach ($airline as $name => $id)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                    <button type="button" id="swapButton" class="p-3 border rounded bg-gray-300">⇆</button>
                    <select id="destinations_id" wire:model="destinations_id" class="w-full p-2 rounded bg-gray-900 text-gray-200 border border-gray-700 focus:outline-none focus:ring focus:border-blue-500 appearance-none">
                        <option value="">-- To --</option>
                        @foreach ($destination as $name => $id)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
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

                    <a href="{{ route('flightusers.create') }}" class="bg-blue-600 text-white px-4 py-3 rounded">
                            Book
                    </a>
                </form>
            </div>
        </div>
    </div>


    <footer class="bg-white text-center py-6 shadow-md mt-12 w-full">
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
