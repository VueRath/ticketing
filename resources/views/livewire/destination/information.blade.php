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
                    <select id="$airline_id" wire:model="$airline_id" class="w-full p-2 rounded bg-gray-900 text-gray-200 border border-gray-700 focus:outline-none focus:ring focus:border-blue-500 appearance-none">
                        <option value="">--- From --</option>
                        @foreach ($airline as $name => $airline_id)
                            <option value="{{ $name }}">{{ $name }}</option> <!-- Ensure correct value & label -->
                        @endforeach
                    </select>
                    <button type="button" id="swapButton" class="p-3 border rounded bg-gray-300">⇆</button>
                    <select id="$destination_id" wire:model="$destination_id" class="w-full p-2 rounded bg-gray-900 text-gray-200 border border-gray-700 focus:outline-none focus:ring focus:border-blue-500 appearance-none">
                        <option value="">-- to --</option>
                        @foreach ($destination as $name => $destination_id)
                            <option value="{{ $name }}">{{ $name }}</option> <!-- Ensure correct value & label -->
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

                    <button class="bg-blue-600 text-white px-4 py-3 rounded">Search</button>
                </form>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto py-12">
        <div class="flex items-center justify-center min-h-[80vh] bg-gray-800 text-white gap-8 py-20">
            <h1 class="">Hello world</h1>
            <!-- First card -->
            <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg max-w-xs my-8 bg-gray-500 hover:bg-gray-700">
                <img alt="" src="{{ asset('images/small.jpg') }}" class="h-56 w-full object-cover" />
                <div class="bg-gray-900 p-4 sm:p-6">
                    <p class="block text-xs text-gray-400">
                        $1300
                    </p>
                    <h3 class="mt-0.5 text-lg text-white">Small house</h3>
                    <p class="mt-2 line-clamp-3 text-sm text-gray-400">
                        "Cozy and charming small house available for $1300 per night. Enjoy a peaceful stay with modern amenities, a comfortable bedroom, fully equipped kitchen, and a relaxing outdoor area. Ideal for couples or solo travelers looking for a homey getaway."
                    </p>
                    <!-- Arrow -->
                    <div class="flex">
                        <a class="ml-auto inline-block rounded-full border border-indigo-600 p-3 text-indigo-600 hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500 transition delay-150 duration-150 ease-in-out">
                            <span class="sr-only">Download</span>
                            <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Second card -->
            <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg max-w-xs my-8 bg-gray-500 hover:bg-gray-700">
                <img alt="" src="{{ asset('images/medium.jpg') }}" class="h-56 w-full object-cover" />
                <div class="bg-gray-900 p-4 sm:p-6">
                    <p class="block text-xs text-gray-400">
                        $1600
                    </p>
                    <h3 class="mt-0.5 text-lg text-white">Medium house</h3>


                    <p class="mt-2 line-clamp-3 text-sm text-gray-400">
                        "Comfortable and spacious medium-sized house available for $1600 per night. Featuring a cozy living area, fully equipped kitchen, two bedrooms, and a private backyard. Perfect for small families or groups seeking a relaxing stay."
                    </p>
                    <!-- Arrow -->
                    <div class="flex">
                        <a class="ml-auto inline-block rounded-full border border-indigo-600 p-3 text-indigo-600 hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500 transition delay-150 duration-100 ease-in-out">
                            <span class="sr-only">Download</span>
                            <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Third card -->
            <article class="overflow-hidden rounded-lg shadow transition hover:shadow-lg max-w-xs my-8 bg-gray-500 hover:bg-gray-700">
                <img alt="" src="{{ asset('images/large.jpg') }}" class="h-56 w-full object-cover" />
                <div class="bg-gray-900 p-4 sm:p-6">
                    <p class="block text-xs text-gray-400">
                        $2000
                    </p>
                    <h3 class="mt-0.5 text-lg text-white">Large house</h3>
                    <p class="mt-2 line-clamp-3 text-sm text-gray-400">
                        "Spacious and luxurious large house available for $2000 per night. With multiple bedrooms, a fully equipped kitchen, expansive living areas, and a private garden, this home offers the perfect retreat for larger families or groups."
                    </p>
                    <!-- Arrow -->
                    <div class="flex">
                        <a class="ml-auto inline-block rounded-full border border-indigo-600 p-3 text-indigo-600 hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500 transition delay-150 duration-150 ease-in-out">
                            <span class="sr-only">Download</span>
                            <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
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
