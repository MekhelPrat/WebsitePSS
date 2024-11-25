<footer class="flex flex-col justify-center items-center px-16 py-3 w-full text-xl text-blue-950 bg-stone-50 max-md:px-5 max-md:max-w-full">
    <div class="flex flex-wrap gap-5 justify-between w-full max-w-[1255px] max-md:max-w-full">
        <address class="my-auto w-auto not-italic justify-start items-start">
            Peduli Sungai Surabaya <br />
            <br />
            Jl. Basuki Rahmat 194 <br />
            Surabaya, Jawa Timur <br />
            60265
        </address>
        <nav class="flex flex-col justify-center items-center whitespace-nowrap min-h-auto mt-16">
            <a href="{{ route('home') }}" class="mb-8">Home</a>
            <a href="{{ route('about') }}" class="mb-8">Tentang</a>
            <a href="{{ route('event') }}" class="mb-8">Aksi</a>
            <a href="{{ route('artikel') }}" class="mb-8">Berita</a>
        </nav>
        <div class="flex flex-col justify-end items-end self-start mt-16 max-md:mt-10">
            <h3 class="self-start">Ikuti Kami</h3>
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/403c240e6d8fb55e5573e574fcc4b77ddeba1e9bd86ec6f47f90fdbcbaeca78d?placeholderIfAbsent=true&apiKey=0969eba5b42f448eb16e91c352a1ba41" alt="Social media icons" class="object-contain mt-6 aspect-[4] w-[120px]" />
        </div>
    </div>
</footer>
