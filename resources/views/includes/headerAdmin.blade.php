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
                <li><a href="{{ route('admin.index') }}" class="nav-link {{ request()->routeIs('admin.index') ? 'active' : '' }} mx-14">Home</a></li>
                <li><a href="{{ route('admin.store.get') }}" class="nav-link {{ request()->routeIs('admin.store.get') ? 'active' : '' }} mx-14">Add Event</a></li>
                <li><a href="{{ route('admin.berita.get') }}" class="nav-link {{ request()->routeIs('admin.berita.get') ? 'active' : '' }} mx-14">Add News</a></li>
            </ul>

            <div class="self-stretch px-4 sm:px-5 md:px-7 py-2 sm:py-3 md:py-4 my-auto"></div>

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



