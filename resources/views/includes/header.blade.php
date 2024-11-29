<header class="flex overflow-visible justify-center items-center z-50 flex-col w-full bg-stone-900 max-w-full sticky top-0">
    <nav class="flex flex-col w-full text-base sm:text-lg md:text-xl text-center whitespace-nowrap bg-blue-950 bg-opacity-0 max-w-full">
        <div class="flex flex-wrap gap-3 sm:gap-4 md:gap-5 justify-between items-center p-4 sm:p-5 md:p-6 lg:p-7 mb-0 w-full bg-blue-950 border-stone-50 max-w-full">
            <!-- Logo -->
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b8ec80ede436cc5684b2c8aa3a4c742d60464d7b44ce844d24cfd4023d612ddc?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Peduli Sungai Surabaya Logo" class="object-contain shrink-0 self-stretch aspect-[1.02] w-10 sm:w-14 md:w-16" />
            
            <!-- Hamburger Menu  -->
            <button id="menu-toggle" class="sm:hidden px-4 py-2 text-white bg-blue-500 rounded focus:outline-none focus:ring-2 focus:ring-blue-700">
                ☰
            </button>
            
            <!-- Nav -->
            <ul id="menu" class="hidden flex-col sm:flex sm:flex-row gap-3 sm:gap-5 md:gap-8 lg:gap-10 self-stretch my-auto text-white max-w-full">
                <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} mx-14">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }} mx-14">Tentang</a></li>
                <li><a href="{{ route('event') }}" class="nav-link {{ request()->routeIs('event') ? 'active' : '' }} mx-14">Aksi</a></li>
                <li><a href="{{ route('artikel') }}" class="nav-link {{ request()->routeIs('artikel') ? 'active' : '' }} mx-14">Berita</a></li>
                {{-- <li><a href="{{ route('replastik') }}" class="nav-link {{ request()->routeIs('replastik') ? 'active' : '' }} mx-14">Replastik</a></li> --}}

                
                <!-- Gabung Dropdown -->
                <li class="relative group">
                    <button class="nav-link mx-12 flex items-center">Gabung
                        <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <ul class="absolute left-0 hidden bg-blue-950 text-white p-4 w-48 rounded-lg z-50 group-hover:block shadow">
                        <li><a href="{{ route('relawan') }}" class="nav-link {{ request()->routeIs('relawan') ? 'active' : '' }} block px-4 py-2">Relawan</a></li>
                        <li><a href="{{ route('magang') }}" class="nav-link {{ request()->routeIs('magang') ? 'active' : '' }} block px-4 py-2">Magang</a></li>
                        <li><a href="{{ route('mitra') }}" class="nav-link {{ request()->routeIs('mitra') ? 'active' : '' }} block px-4 py-2">Mitra</a></li>
                    </ul>
                </li>

            </ul>

            <!-- Donasi Button -->
            <a href="{{ route('donasi') }}" class="{{ request()->routeIs('mitra') ? 'active' : '' }} self-stretch px-4 sm:px-5 md:px-7 py-2 sm:py-3 md:py-4 my-auto bg-blue-500 rounded-[50px] text-stone-50 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 transition-colors duration-300">
                Donasi
            </a>
        </div>
    </nav>
</header>


<script>
    const toggleButton = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    toggleButton.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>



