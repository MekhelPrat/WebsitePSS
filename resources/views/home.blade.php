@extends('base.app')

@section('content')
<div class="bg-black">
    <!-- Navigation Bar -->
    @include('includes.header')

    <div class="flex flex-col w-full bg-blue-950 max-w-full">
        <div class="flex flex-row items-center justify-between mx-4 sm:mx-8 md:mx-16 lg:mx-28 max-w-full w-full sm:w-[80%] md:w-[60%] lg:w-[auto]">
            <div class="flex flex-col flex-1">
                <div class="flex items-center ml-32 z-20">
                    <a href="https://www.instagram.com/pedulisungaisurabaya/?hl=en" target="_blank">
                        <img src="{{ asset('assets/SosmedLogo/ig.png') }}" class="object-contain w-8 h-8" alt="Instagram icon" />
                    </a>
                    <a href="https://www.tiktok.com/@pedulisungaisurabaya?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('assets/SosmedLogo/tt.png') }}" class="object-contain w-12 h-12" alt="TikTok icon" />
                    </a>
                    <a href="https://wa.me/+6287705504655" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('assets/SosmedLogo/wa.png') }}" class="object-contain w-8 h-8" alt="WhatsApp icon" />
                    </a>
                    <a href="https://www.facebook.com/Pedulisungaisurabaya/?locale=id_ID" target="_blank" rel="noopener noreferrer">
                        <img src="{{ asset('assets/SosmedLogo/fb.png') }}" class="object-contain w-9 h-9" alt="Facebook icon" />
                    </a>
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-white max-w-full ml-32">PEDULI SUNGAI <br> SURABAYA</h1>
                <a href="#join-now" class="self-start px-6 ml-32 sm:px-7 md:px-8 lg:px-9 py-3 sm:py-4 md:py-5 mt-8 sm:mt-10 md:mt-12 lg:mt-14 text-lg sm:text-xl font-bold text-center bg-blue-500 rounded-[50px] text-stone-50 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 transition-colors duration-300">Gabung Sekarang</a>
            </div>
            <img src="{{ asset('assets/Eco conscious-bro 1.png') }}" alt="Deskripsi Gambar" class="mr-44 w-auto max-w-full" style="max-height: 100%; object-fit: contain;">
        </div>    
        <div class="flex relative flex-col w-full">
            <img src="{{ asset('assets/Group 33.png') }}" alt="Deskripsi Gambar" class="w-full h-auto object-contain">
        </div>
    </div>
    
    <section class="flex flex-col pt-14 sm:pt-20 md:pt-24 lg:pt-28 w-full bg-stone-50 max-w-full" style="background-color: #F9F9F9;">
        <section class="self-start w-full ml-16 max-w-full sm:max-w-sm md:max-w-[1280px]">
            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex flex-col w-full md:w-auto">
                    <div class="md:text-5xl font-bold text-blue-950 mt-2">
                        <h2 class="">Tentang Kami</h2>
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8afcd4e650988af0c30702d2dd7a6ea2885c6bd7c0e8c398cfb339632e3cc603?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Illustration representing Peduli Sungai Surabaya's mission" class="object-contain mt-8 sm:mt-10 md:mt-14 w-full rounded-xl aspect-[1.23] max-w-full" />
                    </div>
                </div>
                <div class="flex flex-col md:ml-5 w-full mt-16 md:w-[65%]">
                    <div class="flex flex-col self-stretch my-auto w-full text-base sm:text-lg mx-28 md:text-xl sm:mt-8 md:mt-10 max-w-full">
                        <p class="text-black max-w-full">
                            Peduli Sungai Surabaya adalah wadah para relawan <br> lingkungan yang telah berdiri sejak tahun 2017 dan <br> bertujuan membawa dampak positif terhadap lingkungan <br> dan perilaku masyarakat, khususnya bantaran sungai.
                            <br /><br />
                            Spirit gerak kami adalah mengubah mindset dan habit <br> masyarakat tentang sampah. Semakin berkurangnya polusi <br> berupa sampah di air, kami harap kualitas air (terutama di <br> sungai) Surabaya bisa kembali baik.
                        </p>
                        <a href="#read-more" class="flex gap-1 items-start self-start px-5 sm:px-6 md:px-7 py-2 sm:py-3 mt-8 sm:mt-8 md:mt-9 font-bold text-center bg-blue-500 rounded-[50px] shadow-[0px_4px_4px_rgba(0,0,0,0.25)] text-stone-50 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 transition-colors duration-300">
                            <span class="grow my-auto">Baca Lebih Lanjut</span>
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5c6f82324389e75db9e55690adf9ab2f3c6b33781b17e8b8a256ce1284b733bb?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    
        <div class="flex relative flex-col w-full mt-36">
            <img src="{{ asset('assets/Group 34.png') }}" alt="Deskripsi Gambar" class="w-full h-auto object-contain">
        </div>
    
        <section class="flex flex-col self-center max-w-full sm:max-w-full md:max-w-full" style="background-color: #132A53;">
            <h2 class="items-start justify-start text-3xl sm:text-4xl md:text-5xl ml-36 font-bold text-stone-50">Aksi Kami</h2>
            <div class="flex flex-wrap gap-5 sm:gap-8 md:gap-10 justify-center items-center mt-10 sm:mt-14 md:mt-16 lg:mt-20 text-lg sm:text-xl font-bold text-center text-white">
                <article class="flex flex-col self-stretch mx-10 my-auto whitespace-nowrap w-full sm:w-[45%] md:w-[325px]" onclick="openModal('Kampanye Bijak Nyampah', 'https://cdn.builder.io/api/v1/image/assets/TEMP/a4f03099205772b226788d02f5da0b83e10744831bb2e253e5b3547fc2de2e0a?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484', 'Program utama yang bertujuan mengajak masyarakat luas untuk bersama-sama berpikir dan bertanggung jawab dalam menghasilkan sampah, baik sebelum maupun setelah konsumsi. Program ini bertujuan untuk edukasi, perubahan mindset, dan kebiasaan dalam mengelola sampah sehingga volume sampah yang dihasilkan bisa berkurang.')">
                    <div class="flex relative flex-col pt-48 sm:pt-56 md:pt-64 w-full rounded-xl aspect-[0.74]">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a4f03099205772b226788d02f5da0b83e10744831bb2e253e5b3547fc2de2e0a?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Illustration of responsible waste management" class="object-cover absolute inset-0 size-full" />
                        <h3 class="relative px-3 mt-36 sm:px-8 md:px-11 py-2 sm:py-3 md:py-3.5 bg-blue-500 rounded-none">Bijak Nyampah</h3>
                    </div>
                </article>
                <article class="flex flex-col self-stretch mx-10 my-auto whitespace-nowrap w-full sm:w-[45%] md:w-[325px]" onclick="openModal('Ecotour', 'https://cdn.builder.io/api/v1/image/assets/TEMP/62793e551eec845c5a7a1a87c05099d14346594c18ee870c093cc6a747791f54?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484', 'Ecotour description...')">
                    <div class="flex relative flex-col pt-48 sm:pt-56 md:pt-64 w-full rounded-xl aspect-[0.74]">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/62793e551eec845c5a7a1a87c05099d14346594c18ee870c093cc6a747791f54?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Ecotourism activity illustration" class="object-cover absolute inset-0 size-full" />
                        <h3 class="relative px-10 mt-36 sm:px-12 md:px-16 py-2 sm:py-3 md:py-4 bg-blue-500 rounded-none">Ecotour</h3>
                    </div>
                </article>
                <article class="flex flex-col self-stretch mx-10 my-auto whitespace-nowrap w-full sm:w-[45%] md:w-[325px]" onclick="openModal('Workshop', 'https://cdn.builder.io/api/v1/image/assets/TEMP/aaaec6ddd5453991a4cf6de6762758c65d15258700c06e91b3a32926d85931bc?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484', 'Workshop description...')">
                    <div class="flex relative flex-col pt-48 sm:pt-56 md:pt-64 w-full rounded-xl aspect-[0.743]">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/aaaec6ddd5453991a4cf6de6762758c65d15258700c06e91b3a32926d85931bc?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Workshop activity illustration" class="object-cover absolute inset-0 size-full" />
                        <h3 class="relative px-10 mt-36 sm:px-12 md:px-16 py-2 sm:py-3 md:py-3.5 bg-blue-500 rounded-none">Workshop</h3>
                    </div>
                </article>
                <article class="flex flex-col self-stretch mx-10 my-auto whitespace-nowrap w-full sm:w-[45%] md:w-[325px]" onclick="openModal('Pelatihan', 'https://cdn.builder.io/api/v1/image/assets/TEMP/179956c17661af74ca31837a66d5f1fc06fb59c6009699d4b538d111b0b54136?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484', 'Pelatihan description...')">
                    <div class="flex relative flex-col pt-48 sm:pt-56 md:pt-64 w-full rounded-xl aspect-[0.743]">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/179956c17661af74ca31837a66d5f1fc06fb59c6009699d4b538d111b0b54136?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Pelatihan activity illustration" class="object-cover absolute inset-0 size-full" />
                        <h3 class="relative px-10 mt-36 sm:px-12 md:px-16 py-2 sm:py-3 md:py-3.5 bg-blue-500 rounded-none">Pelatihan</h3>
                    </div>
                </article>
                <div class="flex relative flex-col w-full">
                    <img src="{{ asset('assets/Group 33.png') }}" alt="Deskripsi Gambar" class="w-full h-auto object-contain">
                </div>
            </div>
        </section>
    
        
        <section class="flex flex-col self-center w-full -mt-72 max-w-full sm:max-w-full md:max-w-full" style="background-color: #F9F9F9;">
            <div class="flex flex-wrap gap-3 sm:gap-4 md:gap-5 justify-between mx-36 w-full font-bold max-w-[1180px] mt-20 sm:mt-24 md:mt-28 lg:mt-[474px] text-blue-950">
                <h2 class="text-3xl sm:text-4xl md:text-5xl">Berita Terbaru</h2>
                <a href="#view-all" class="flex gap-1 sm:gap-1.5 self-start mt-2 sm:mt-3 md:mt-3.5 text-lg sm:text-xl text-center rounded-[50px] hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-300">
                    <span class="grow my-auto">Lihat Semua</span>
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d635062fcd219fe661a426ae39ffad52471b18c57881ec57049e6e0a178f918f?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="" class="object-contain shrink-0 aspect-square w-[18px] sm:w-[20px] md:w-[23px]" />
                </a>
            </div>
            <div class="mt-8 sm:mt-12 md:mt-16 max-w-full">
                <FILE path="peduli-sungai-surabaya-responsive-section.html">
                    <div class="flex flex-wrap gap-5 justify-between w-full max-md:flex-col">
                        <article class="flex flex-col w-full md:w-[22%] ml-36 max-md:mt-9">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/404c03f952711746ccbfee506835a3c52a98e93a4c368bbb9df415e8a0623c4b?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="News article image" class="object-cover w-full rounded-xl aspect-square" />
                            <div class="flex gap-2 mt-5 text-sm sm:text-base text-slate-700 text-opacity-30">
                                <span>Peduli Sungai Surabaya</span>
                                <span class="flex shrink-0 self-start w-2 h-2 mt-2 rounded-full bg-slate-500 bg-opacity-30"></span>
                                <span>1 bulan lalu</span>
                            </div>
                            <h3 class="mt-5 text-lg sm:text-xl font-bold text-black">Pentingnya menjaga lingkungan untuk kesehatan</h3>
                            <p class="mt-4 sm:mt-9 text-base sm:text-lg text-black">Ciptakan masa depan sehat dengan menjaga lingkungan!</p>
                        </article>
                        <article class="flex flex-col w-full md:w-[22%] max-md:mt-9">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9c779f909e3efd34390c57dc323e3831a66f8207bc9f4e99e133ac993529e486?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="News article image" class="object-cover w-full rounded-xl aspect-square" />
                            <div class="flex gap-2 mt-5 text-sm sm:text-base text-slate-700 text-opacity-30">
                                <span>Peduli Sungai Surabaya</span>
                                <span class="flex shrink-0 self-start w-2 h-2 mt-2 rounded-full bg-slate-500 bg-opacity-30"></span>
                                <span>2 jam lalu</span>
                            </div>
                            <h3 class="mt-3.5 text-lg sm:text-xl font-bold text-black">Cara mengolah limbah plastik menjadi tempat duduk ramah lingkungan</h3>
                            <p class="mt-4 text-base sm:text-lg text-black">Mengolah limbah plastik menjadi hal yang lebih bermanfaat</p>
                        </article>
                        <article class="flex flex-col w-full md:w-[22%] mr-36 max-md:mt-9">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/80b1fe7b8219a1eb93c2b991c55e63079eb33dc4e0793ddeecb2afdea3348a31?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="News article image" class="object-cover w-full rounded-xl aspect-square" />
                            <div class="flex gap-2 mt-5 text-sm sm:text-base text-slate-700 text-opacity-30">
                                <span>Peduli Sungai Surabaya</span>
                                <span class="flex shrink-0 self-start w-2 h-2 mt-2 rounded-full bg-slate-500 bg-opacity-30"></span>
                                <span>1 jam lalu</span>
                            </div>
                            <h3 class="mt-3.5 text-lg sm:text-xl font-bold text-black">Ciri-ciri sungai yang bersih dan aman untuk digunakan</h3>
                            <p class="mt-4 sm:mt-10 text-base sm:text-lg text-black">Sungai sangat memberikan manfaat bagi kita namun perlu berhati-hati dalam menggunakan air sungai. Seperti apa sih sungai yang bersih dan aman digunakan?</p>
                        </article>
                    </div>
            </div>
        </section>
        <section class="self-start w-full ml-40 mt-60 max-w-full sm:max-w-full md:max-w-[1280px]">
            <div class="flex flex-col md:flex-row gap-5">
                <div class="flex flex-wrap gap-5 justify-between max-md:flex-col">
                    <div class="w-full">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/10fb14906fb386751c07e4c51da98fb85a465b4590122dbd5f4121f5d47497fd?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Donation campaign image" class="object-contain w-full aspect-square max-md:mt-10 max-w-full" />
                    </div>
                </div>
                <div class="flex flex-col items-start self-stretch w-full md:w-6/12 text-xl font-bold max-md:mt-10 mt-20 max-w-full">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl text-blue-950">Kami Butuh Anda</h2>
                    <p class="self-stretch mt-8 sm:mt-10 md:mt-14 text-base sm:text-lg md:text-xl text-black max-w-full">
                        Yuk, bersama-sama kita jaga kebersihan lingkungan! Dengan setiap sumbangan Anda, kami dapat melakukan aksi pembersihan dan pelestarian alam yang lebih baik. Bantu kami menjadikan dunia ini tempat yang lebih bersih dan hijau dengan berdonasi sekarang.
                    </p>
                    <a href="{{ route('donasi') }}" class="{{ request()->routeIs('mitra') ? 'active' : '' }} flex gap-4 sm:gap-5 md:gap-6 items-center px-6 sm:px-8 md:px-10 py-2 sm:py-3 mt-5 sm:mt-6 md:mt-7 text-center bg-blue-500 rounded-[50px] text-stone-50 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 transition-colors duration-300">
                        <span class="text-base sm:text-lg md:text-xl">Berikan Donasi</span>
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5894f5183a22c2511cf7a0b1da41f2af8697102edb503f946691bf7fdd0eaf5e?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="" class="object-contain shrink-0 w-6 sm:w-7 md:w-8 aspect-square" />
                    </a>
                </div>
            </div>
        </section>
    </section>
    
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="flex items-center justify-center w-full h-full">
            <div class="bg-white w-10/12 md:w-6/12 rounded-[16px] relative">
                <button id="close-modal" class="absolute top-2 right-2 text-black text-lg font-bold pr-2">X</button>
    
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="w-full md:w-1/2">
                        <img id="modal-image" src="https://cdn.builder.io/api/v1/image/assets/TEMP/179956c17661af74ca31837a66d5f1fc06fb59c6009699d4b538d111b0b54136?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Modal Image" class="w-full h-full object-cover rounded-[8px]">
                    </div>
    
                    <div class="w-full md:w-1/2 flex flex-col justify-between">
                        <div>
                            <h3 id="modal-title" class="text-xl font-bold text-blue-950 m-4"></h3>
                            <p id="modal-description" class="text-md text-black m-4">
                            </p>
                        </div>
                        <button id="cta-button" class="bg-blue-500 text-white py-2 px-4 rounded-[32px] self-start hover:bg-blue-600 focus:outline-none mb-12 ml-4">
                            Gabung Sekarang →
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function openModal(title, imageSrc, description) {
            // Show the modal
            const modal = document.getElementById('modal');
            modal.classList.remove('hidden');
    
            // Set the modal content dynamically
            document.getElementById('modal-title').innerText = title;
            document.getElementById('modal-image').src = imageSrc;
            document.getElementById('modal-description').innerText = description;
        }
    
        document.getElementById('close-modal').addEventListener('click', () => {
            document.getElementById('modal').classList.add('hidden');
        });
    
        window.addEventListener('click', (e) => {
            if (e.target === document.getElementById('modal')) {
                document.getElementById('modal').classList.add('hidden');
            }
        });
    </script>
    

    <!-- Footer -->
    @include('includes.footer')
</div>
@endsection