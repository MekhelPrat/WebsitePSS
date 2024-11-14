<section class="flex overflow-hidden flex-col bg-stone-50">
    <header class="flex overflow-hidden justify-center items-center z-10 flex-col w-full bg-stone-900 max-w-full">
        <div class="flex flex-col w-full bg-blue-950 max-w-full">
            <nav class="flex overflow-hidden z-10 h-10 flex-col pb-20 sm:pb-40 md:pb-56 lg:pb-72 w-full text-base sm:text-lg md:text-xl text-center whitespace-nowrap bg-blue-950 bg-opacity-0 max-w-full">
                <div class="flex flex-wrap gap-3 sm:gap-4 md:gap-5 justify-between items-center p-4 sm:p-5 md:p-6 lg:p-7 mb-0 w-full border-b bg-blue-950 border-stone-50 max-w-full">
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b8ec80ede436cc5684b2c8aa3a4c742d60464d7b44ce844d24cfd4023d612ddc?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Peduli Sungai Surabaya Logo" class="object-contain shrink-0 self-stretch aspect-[1.32] w-[20px] sm:w-[30px] md:w-[30px]" />
                    <ul class="flex flex-wrap text-sm gap-3 sm:gap-5 md:gap-8 lg:gap-10 self-stretch my-auto text-white max-w-full">
                        <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} mx-12">Home</a></li>
                        <li><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }} mx-12">Tentang</a></li>
                        <li><a href="{{ route('event') }}" class="nav-link {{ request()->routeIs('event') ? 'active' : '' }} mx-12">Aksi</a></li>
                        <li><a href="{{ route('artikel') }}" class="nav-link {{ request()->routeIs('artikel') ? 'active' : '' }} mx-12">Berita</a></li>
                        <li><a href="{{ route('gabung') }}" class="nav-link {{ request()->routeIs('gabung') ? 'active' : '' }} mx-12">Gabung</a></li>
                    </ul>

                    <a href="#donasi" class="self-stretch text-sm px-4 w-auto h-8 sm:px-5 md:px-7 py-2 sm:py-3 md:py-4 my-auto bg-blue-500 rounded-[50px] text-stone-50 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 transition-colors duration-300">Donasi</a>
                </div>
            </nav>
            <div class="flex flex-row items-center justify-between -mt-20 mb-20 sm:-mt-52 md:-mt-52 mx-4 sm:mx-8 md:mx-16 lg:mx-28 max-w-full w-full sm:w-[80%] md:w-[60%] lg:w-[auto]">
                <div class="flex flex-col flex-1">
                    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-white max-w-full ml-32">LET’S ACT <br> NOW FOR <br> BETTER <br> EARTH</h1>
                </div>
                <img src="{{ asset('assets/Happy Earth-rafiki 1.png') }}" alt="Deskripsi Gambar" class="mr-44 w-auto max-w-full">
            </div>
            <div class="flex relative flex-col mt-16 sm:-mt-28 md:-mt-28 lg:-mt-28 mt w-full min-h-[200px] sm:min-h-[250px] md:min-h-[300px] lg:min-h-[342px] max-w-full">
                <img src="{{ asset('assets/Group 33.png') }}" alt="Deskripsi Gambar" class="w-auto max-w-auto">
            </div>
        </div>
    </header>
</section>