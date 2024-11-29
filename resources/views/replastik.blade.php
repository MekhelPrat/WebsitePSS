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
                <img src="{{ asset('assets/Icon/IconEarth.png') }}" alt="Deskripsi Gambar" class="w-2/3  md:w-auto md:mr-16 lg:mr-44 mt-6 md:mt-0">
            </div>
            <div class="flex relative flex-col w-full">
                <img src="{{ asset('assets/Group 33.png') }}" alt="Deskripsi Gambar" class="w-full h-auto object-contain">
            </div>
        </div>
    </section>
    
    <section class="flex overflow-hidden flex-col -mt-10 items-center" style="background-color:#F9F9F9; padding: 5rem;">    

            <article class="max-md:mt-10 max-md:mr-2.5 max-md:max-w-full" style="padding: 1rem;">
                <div class="flex gap-5 max-md:flex-col" >
                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://cdn.builder.io/api/v1/image/assets/TEMP/02138b853af30841ae6c5fd72f62133b8815fd07d908f6b3c2cd0f85096ec136?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">Noteworthy technology acquisitions 2021</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>
                    </a>
                </div>
            </article>

            <article class="max-md:mt-10 max-md:mr-2.5 max-md:max-w-full" style="padding: 1rem;">
                <div class="flex gap-5 max-md:flex-col" >
                    <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="https://cdn.builder.io/api/v1/image/assets/TEMP/02138b853af30841ae6c5fd72f62133b8815fd07d908f6b3c2cd0f85096ec136?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="">
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black">Noteworthy technology acquisitions 2021</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                        </div>
                    </a>
                </div>
            </article>
            
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
      


    @include('includes.footer')

</div>
@endsection