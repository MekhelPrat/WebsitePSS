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
            <div class="flex items-center">
                <a href="https://www.instagram.com/pedulisungaisurabaya/?hl=en" target="_blank">
                    <img src="{{ asset('assets/SosmedLogo/biru/ig.png') }}" class="object-contain w-8 h-8" alt="Instagram icon" />
                </a>
                <a href="https://www.tiktok.com/@pedulisungaisurabaya?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/SosmedLogo/biru/tt.png') }}" class="object-contain w-12 h-12" alt="TikTok icon" />
                </a>
                <a href="https://wa.me/+6287705504655" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/SosmedLogo/biru/wa.png') }}" class="object-contain w-8 h-8" alt="WhatsApp icon" />
                </a>
                <a href="https://www.facebook.com/Pedulisungaisurabaya/?locale=id_ID" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('assets/SosmedLogo/biru/fb.png') }}" class="object-contain w-9 h-9" alt="Facebook icon" />
                </a>
            </div>
        </div>
    </div>
</footer>
