<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link :href="route('about-us')" :active="request()->routeIs('about-us')">
                        {{ __('About us') }}
                    </x-nav-link>
                </div>
        </div>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us - Ticketing</title>

    <!-- Fonts & Tailwind -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-6 py-12">
        <!-- About Us -->
        <div class="text-center mb-10">
            <h1 class="text-5xl font-bold text-gray-900">About Us</h1>
            <p class="text-lg text-gray-600 mt-4 max-w-2xl mx-auto">
                At <span class="font-semibold text-gray-800">Ticketing</span>, we believe that travel should be effortless, accessible, and enjoyable for everyone.
                Our mission is to provide a seamless booking experience, ensuring that our customers can focus on what truly matters—exploring new destinations,
                creating unforgettable memories, and connecting with the world.
            </p>
        </div>

        <!-- Mission, Vision, Core Values -->
        <div class="grid md:grid-cols-3 gap-8 text-center">
            <!-- Mission -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-2xl font-semibold text-gray-800">Our Mission</h2>
                <p class="text-gray-600 mt-3">
                    To provide travelers with an effortless, secure, and affordable ticket booking experience.
                    We strive to simplify travel planning through innovative technology, outstanding customer service,
                    and a commitment to making every journey stress-free.
                </p>
            </div>

            <!-- Vision -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-2xl font-semibold text-gray-800">Our Vision</h2>
                <p class="text-gray-600 mt-3">
                    To become the leading online ticketing platform, revolutionizing the way people book and experience travel.
                    We envision a future where everyone can explore the world with ease, confidence, and affordability.
                </p>
            </div>

            <!-- Core Values -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-2xl font-semibold text-gray-800">Core Values</h2>
                <ul class="text-gray-600 mt-3 text-left mx-auto max-w-xs">
                    <li>✅ <span class="font-semibold">Customer First:</span> We prioritize customer satisfaction and trust.</li>
                    <li>✅ <span class="font-semibold">Innovation:</span> We embrace technology to enhance travel booking.</li>
                    <li>✅ <span class="font-semibold">Reliability:</span> We provide transparent pricing and secure transactions.</li>
                    <li>✅ <span class="font-semibold">Integrity:</span> Honesty and fairness guide everything we do.</li>
                </ul>
            </div>
        </div>

        <!-- Leadership Team -->
        <div class="text-center mt-12">
            <h2 class="text-4xl font-bold text-gray-900">Meet Our Team</h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mt-8">
            <!-- CEO -->
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <img src="{{ asset('images/woman.png') }}" alt="James Guba" class="w-32 h-32 mx-auto rounded-full object-cover">
                <h2 class="text-xl font-semibold mt-4">James David Guba</h2>
                <p class="text-gray-500">Chief Executive Officer</p>
                <p class="mt-2 text-gray-700">Leading the company towards innovation and excellence in travel ticketing.</p>
            </div>

            <!-- CTO -->
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <img src="{{ asset('images/jan-michael.png') }}" alt="Jan Michael" class="w-32 h-32 mx-auto rounded-full object-cover">
                <h2 class="text-xl font-semibold mt-4">Jan Michael Cabahug</h2>
                <p class="text-gray-500">Chief Technology Officer</p>
                <p class="mt-2 text-gray-700">Ensuring smooth and secure online ticketing through cutting-edge technology.</p>
            </div>

            <!-- Customer Relations Head -->
            <div class="bg-white p-6 rounded-lg shadow text-center">
                <img src="{{ asset('images/jhun-kenneth.png') }}" alt="Jhun Kenneth" class="w-32 h-32 mx-auto rounded-full object-cover">
                <h2 class="text-xl font-semibold mt-4">Jhun Kenneth Curacha</h2>
                <p class="text-gray-500">Head of Customer Relations</p>
                <p class="mt-2 text-gray-700">Providing top-tier support and ensuring customer satisfaction at every step.</p>
            </div>
        </div>
    </div>
</body>
</html>
