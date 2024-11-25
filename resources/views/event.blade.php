@extends('base.app')

@section('content')
<div class="bg-black">
    <!-- Navigation Bar -->
    @include('includes.header')

    <section class="flex overflow-hidden flex-col items-center bg-stone-50">
    <div class="flex flex-col w-full bg-blue-950 max-w-full">
        <div class="flex flex-col md:flex-row items-center justify-between mx-4 sm:mx-8 md:mx-16 lg:mx-28 max-w-full w-full">
            <div class="flex flex-col flex-1 text-center md:text-left">
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-white max-w-full md:ml-32">LET’S ACT <br> NOW FOR <br> BETTER <br> EARTH</h1>
            </div>
            <img src="{{ asset('assets/Happy Earth-rafiki 1.png') }}" alt="Deskripsi Gambar" class="w-2/3  md:w-auto md:mr-16 lg:mr-44 mt-6 md:mt-0">
        </div>
        <div class="flex relative flex-col w-full">
            <img src="{{ asset('assets/Group 33.png') }}" alt="Deskripsi Gambar" class="w-full h-auto object-contain">
        </div>
    </div>
</section>

<section class="flex overflow-hidden flex-col -mt-10 items-center" style="background-color:#F9F9F9; padding: 5rem;">
    <div class="flex flex-col mb-0 ml-3 w-full max-w-auto max-md:mb-2.5 max-md:max-w-full" style="background-color: #F9F9F9;">

        @foreach ($events as $event)
            <article class="max-md:mt-10 max-md:mr-2.5 max-md:max-w-full" style="padding: 1rem;">
                <div class="flex gap-5 max-md:flex-col">
                    <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/02138b853af30841ae6c5fd72f62133b8815fd07d908f6b3c2cd0f85096ec136?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484"
                            alt="Image representing Package 2"
                            class="object-contain grow mt-12 w-full rounded-3xl aspect-[1.34] max-md:mt-10 max-md:max-w-full" />
                    </div>
                    <div class="flex flex-col w-6/12 max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col grow text-xs mt-14 max-md:mt-10 max-md:max-w-full">
                            <h2 class="self-start text-5xl font-bold text-center text-blue-500 italic">Paket {{$event->id}}</h2>
                            <p
                                class="px-6 py-2.5 mt-1 text-2xl text-black rounded-xl bg-zinc-300 w-81 h-auto max-md:max-w-full">
                                {{$event->title}}</p>
                            <p class="self-start mt-1 text-3xl text-black font-bold">Rp {{$event->price}}/ Peserta</p>
                            <div class="flex flex-col px-1 mt-2 w-full max-md:max-w-full">
                                <p class="text-black text-2xl max-md:max-w-full">{{$event->description}}</p>
                                <div class="flex gap-5 mt-7 max-w-full text-center whitespace-nowrap w-[401px]">
                                    <button id="modal-button-paket4" href="#donasi"
                                        class="self-stretch text-2xl px-4 sm:px-5 md:px-7 py-2 sm:py-3 md:py-4 my-auto bg-blue-500 rounded-[50px] text-stone-50 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 transition-colors duration-300">
                                        Fasilitas
                                    </button>

                                    <button id="modal-button-date-paket4" href="#donasi"
                                        class="self-stretch text-2xl px-4 sm:px-5 md:px-7 py-2 sm:py-3 md:py-4 my-auto border rounded-[50px] text-Blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 transition-colors duration-300">
                                        Daftar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach
        
    </div>
</section>

<div id="paket4Modal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
    <div id="paket4" class="bg-white p-8 rounded-lg w-11/12 sm:w-1/2 md:w-1/3 transform translate-x-full opacity-0 transition-all duration-500 ease-in-out">
        
        <h2 class="text-xl font-bold">Desain Grafis</h2>

        <p class="mt-4">• Membuat visualisasi konten sosial media (Instagram dan TikTok) baik gambar, reels, dan video pendek.</p>

        <p class="mt-4">• Berkoordinasi dengan social media specialist untuk membuat konten.</p>

        <p class="mt-4">• Membantu kebutuhan desain proposal, template ppt, dsb</p>
        

        <div class="flex gap-4 self-start text-xl flex-wrap justify-center max-md:flex-col max-md:gap-4">
            <button id="close-modal-paket4" class="mt-4 bg-red-500 text-white py-2 px-4 rounded-[50px] hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Tutup</button>

            <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-[50px] hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Gabung Sekarang →</button>
        </div>

    </div>
</div>

<script>

    // Ambil elemen tombol dan modal
    const modalButtonPaket4 = document.getElementById('modal-button-paket4');
    const modalPaket4 = document.getElementById('paket4Modal');
    const modalContentPaket4 = document.getElementById('paket4');
    const closeModalPaket4 = document.getElementById('close-modal-paket4');

    // Tampilkan modal dengan animasi ketika tombol diklik
    modalButtonPaket4.addEventListener('click', () => {
        modalPaket4.classList.remove('hidden');
        setTimeout(() => {
        modalContentPaket4.classList.remove('translate-x-full', 'opacity-0');
        }, 10);
    });

    // Tutup modal dengan animasi ketika tombol tutup diklik
    closeModalPaket4.addEventListener('click', () => {
        modalContentPaket4.classList.add('translate-x-full', 'opacity-0');
        setTimeout(() => {
        modalPaket4.classList.add('hidden');
        }, 500);
    });

</script>
  

    <!-- Footer -->
    @include('includes.footer')
</div>
@endsection