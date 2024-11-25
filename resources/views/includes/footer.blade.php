{{-- <footer class="flex flex-col justify-center items-center px-16 py-3 w-full text-xl text-white bg-blue-950 max-md:px-5 max-md:max-w-full">
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
            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/3211307b9b2e63f8e2be379ba4452c57ea0081528bf3ab290440860ed23fb07a?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Social media icons" class="object-contain mt-6 aspect-[4] w-[120px]" />
        </div>
    </div>
</footer> --}}


<section class="flex overflow-hidden flex-col bg-stone-50">
    <footer class="flex flex-col justify-center items-center px-16 py-3 mt-36 w-full text-xl text-white bg-blue-950 max-md:px-5 max-md:mt-10 max-md:max-w-full">
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
                <div class="flex items-center">
                    <img loading="lazy" src="{{ asset('assets/SosmedLogo/ig.png') }}" class="object-contain w-8 h-8" alt="Instagram icon" />
                    <img loading="lazy" src="{{ asset('assets/SosmedLogo/tt.png') }}" class="object-contain w-12 h-12" alt="TikTok icon" />
                    <img loading="lazy" src="{{ asset('assets/SosmedLogo/wa.png') }}" class="object-contain w-8 h-8" alt="WhatsApp icon" />
                    <img loading="lazy" src="{{ asset('assets/SosmedLogo/fb.png') }}" class="object-contain w-9 h-9" alt="Facebook icon" />
                </div>
            </div>
        </div>
    </footer>
</section>