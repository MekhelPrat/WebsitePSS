<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <style>
        h1,
        a,
        li,
        p {
            font-family: 'Raleway', sans-serif;
        }
    </style>

</head>

<body>
    <div class="flex overflow-hidden flex-col bg-stone-50">
        <header class="flex overflow-hidden z-10 flex-col w-full bg-stone-900 max-w-full">
            <div class="flex flex-col w-full bg-blue-950 max-w-full">
                <nav class="flex overflow-hidden z-10 flex-col pb-20 sm:pb-40 md:pb-56 lg:pb-72 w-full text-base sm:text-lg md:text-xl text-center whitespace-nowrap bg-blue-950 bg-opacity-0 max-w-full">
                    <div class="flex flex-wrap gap-3 sm:gap-4 md:gap-5 justify-between items-center p-4 sm:p-5 md:p-6 lg:p-7 mb-0 w-full border-b bg-blue-950 border-stone-50 max-w-full">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/b8ec80ede436cc5684b2c8aa3a4c742d60464d7b44ce844d24cfd4023d612ddc?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Peduli Sungai Surabaya Logo" class="object-contain shrink-0 self-stretch aspect-[1.02] w-[40px] sm:w-[60px] md:w-[60px]" />
                        <ul class="flex flex-wrap gap-3 sm:gap-5 md:gap-8 lg:gap-10 self-stretch my-auto text-white max-w-full">
                            <li><a href="#home" class="text-blue-500 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500 mx-14">Home</a></li>
                            <li><a href="#tentang" class="hover:text-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 mx-14">Tentang</a></li>
                            <li><a href="#aksi" class="hover:text-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 mx-14">Aksi</a></li>
                            <li><a href="#berita" class="hover:text-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 mx-14">Berita</a></li>
                            <li><a href="#gabung" class="hover:text-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-500 mx-14">Gabung</a></li>
                        </ul>
                        <a href="#donasi" class="self-stretch px-4 sm:px-5 md:px-7 py-2 sm:py-3 md:py-4 my-auto bg-blue-500 rounded-[50px] text-stone-50 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 transition-colors duration-300">Donasi</a>
                    </div>
                </nav>
                <div class="flex flex-row items-center justify-between -mt-52 sm:-mt-52 md:-mt-52 mx-4 sm:mx-8 md:mx-16 lg:mx-28 max-w-full w-full sm:w-[80%] md:w-[60%] lg:w-[auto]">
                    <div class="flex flex-col flex-1">
                        <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold text-white max-w-full ml-32">PEDULI SUNGAI <br> SURABAYA</h1>
                        <a href="#join-now" class="self-start px-6 ml-32 sm:px-7 md:px-8 lg:px-9 py-3 sm:py-4 md:py-5 mt-8 sm:mt-10 md:mt-12 lg:mt-14 text-lg sm:text-xl font-bold text-center bg-blue-500 rounded-[50px] text-stone-50 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 transition-colors duration-300">Gabung Sekarang</a>
                    </div>
                    <img src="{{ asset('assets/Eco conscious-bro 1.png') }}" alt="Deskripsi Gambar" class="mr-44 w-auto max-w-full">
                </div>
                <div class="flex relative flex-col -mt-28 sm:-mt-28 md:-mt-28 lg:-mt-28 mt w-full min-h-[200px] sm:min-h-[250px] md:min-h-[300px] lg:min-h-[342px] max-w-full">
                    <img src="{{ asset('assets/Group 33.png') }}" alt="Deskripsi Gambar" class="w-auto max-w-auto">
                </div>
            </div>
        </header>
        <main class="flex flex-col pt-14 sm:pt-20 md:pt-24 lg:pt-28 w-full bg-stone-50 max-w-full">
            <section class="self-center w-full max-w-[90%] sm:max-w-[80%] md:max-w-[1040px]">
                <div class="flex flex-col md:flex-row gap-5">
                    <div class="flex flex-col w-full md:w-[45%]">
                        <div class="flex flex-col grow text-2xl sm:text-3xl md:text-4xl font-bold text-blue-950 mt-6 sm:mt-8 md:mt-10 max-w-full">
                            <h2 class="self-start">Tentang Kami</h2>
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8afcd4e650988af0c30702d2dd7a6ea2885c6bd7c0e8c398cfb339632e3cc603?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Illustration representing Peduli Sungai Surabaya's mission" class="object-contain mt-8 sm:mt-10 md:mt-14 w-full rounded-xl aspect-[1.23] max-w-full" />
                        </div>
                    </div>
                    <div class="flex flex-col md:ml-5 w-full md:w-[55%]">
                        <div class="flex flex-col self-stretch my-auto w-full text-base sm:text-lg md:text-xl mt-6 sm:mt-8 md:mt-10 max-w-full">
                            <p class="text-black max-w-full">
                                Peduli Sungai Surabaya adalah wadah para relawan lingkungan yang telah berdiri sejak tahun 2017 dan bertujuan membawa dampak positif terhadap lingkungan dan perilaku masyarakat, khususnya bantaran sungai.
                                <br /><br />
                                Spirit gerak kami adalah mengubah mindset dan habit masyarakat tentang sampah. Semakin berkurangnya polusi berupa sampah di air, kami harap kualitas air (terutama di sungai) Surabaya bisa kembali baik.
                            </p>
                            <a href="#read-more" class="flex gap-1 items-start self-start px-5 sm:px-6 md:px-7 py-2 sm:py-3 mt-6 sm:mt-8 md:mt-9 font-bold text-center bg-blue-500 rounded-[50px] shadow-[0px_4px_4px_rgba(0,0,0,0.25)] text-stone-50 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 transition-colors duration-300">
                                <span class="grow my-auto">Baca Lebih Lanjut</span>
                                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5c6f82324389e75db9e55690adf9ab2f3c6b33781b17e8b8a256ce1284b733bb?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="" class="object-contain shrink-0 self-start aspect-[0.94] w-[24px] sm:w-[27px] md:w-[30px]" />
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="flex relative flex-col pt-8 sm:pt-10 md:pt-12 lg:pt-14 pb-4 sm:pb-6 md:pb-8 mt-14 sm:mt-20 md:mt-24 lg:mt-28 w-full min-h-[200px] sm:min-h-[250px] md:min-h-[300px] lg:min-h-[318px] max-w-full">
            <img src="{{ asset('assets/Group 34.png') }}" alt="Deskripsi Gambar" class="w-auto max-w-auto">
            </div>
            <section class="flex flex-col items-start self-center mt-8 sm:mt-9 md:mt-10 lg:mt-11 w-full max-w-[90%] sm:max-w-[80%] md:max-w-[1050px]">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-stone-50">Aksi Kami</h2>
                <div class="flex flex-wrap gap-5 sm:gap-8 md:gap-10 justify-center items-center mt-10 sm:mt-14 md:mt-16 lg:mt-20 text-lg sm:text-xl font-bold text-center text-white">
                    <article class="flex flex-col self-stretch my-auto w-full sm:w-[45%] md:w-[225px]">
                        <div class="flex relative flex-col pt-48 sm:pt-56 md:pt-64 w-full rounded-xl aspect-[0.74]">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/a4f03099205772b226788d02f5da0b83e10744831bb2e253e5b3547fc2de2e0a?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Illustration of responsible waste management" class="object-cover absolute inset-0 size-full" />
                            <h3 class="relative px-6 sm:px-8 md:px-11 py-2 sm:py-3 md:py-3.5 bg-blue-500 rounded-none">Bijak Nyampah</h3>
                        </div>
                    </article>
                    <article class="flex flex-col self-stretch my-auto whitespace-nowrap w-full sm:w-[45%] md:w-[225px]">
                        <div class="flex relative flex-col pt-48 sm:pt-56 md:pt-64 w-full rounded-xl aspect-[0.74]">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/62793e551eec845c5a7a1a87c05099d14346594c18ee870c093cc6a747791f54?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Ecotourism activity illustration" class="object-cover absolute inset-0 size-full" />
                            <h3 class="relative px-10 sm:px-12 md:px-16 py-2 sm:py-3 md:py-4 bg-blue-500 rounded-none">Ecotour</h3>
                        </div>
                    </article>
                    <article class="flex flex-col self-stretch my-auto whitespace-nowrap w-full sm:w-[45%] md:w-[225px]">
                        <div class="flex relative flex-col pt-48 sm:pt-56 md:pt-64 w-full rounded-xl aspect-[0.743]">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/aaaec6ddd5453991a4cf6de6762758c65d15258700c06e91b3a32926d85931bc?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Workshop activity illustration" class="object-cover absolute inset-0 size-full" />
                            <h3 class="relative px-10 sm:px-12 md:px-16 py-2 sm:py-3 md:py-3.5 bg-blue-500 rounded-none">Workshop</h3>
                        </div>
                    </article>
                    <article class="flex flex-col self-stretch my-auto whitespace-nowrap w-full sm:w-[45%] md:w-[225px]">
                        <div class="flex relative flex-col pt-48 sm:pt-56 md:pt-64 w-full rounded-xl aspect-[0.74]">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/179956c17661af74ca31837a66d5f1fc06fb59c6009699d4b538d111b0b54136?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Training session illustration" class="object-cover absolute inset-0 size-full" />
                            <h3 class="relative px-10 sm:px-12 md:px-16 py-2 sm:py-3 md:py-4 bg-blue-500 rounded-none">Pelatihan</h3>
                        </div>
                    </article>
                </div>
                <div class="flex flex-wrap gap-3 sm:gap-4 md:gap-5 justify-between w-full font-bold max-w-[1016px] mt-20 sm:mt-24 md:mt-28 lg:mt-[474px] text-blue-950">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl">Berita Terbaru</h2>
                    <a href="#view-all" class="flex gap-1 sm:gap-1.5 self-start mt-2 sm:mt-3 md:mt-3.5 text-lg sm:text-xl text-center rounded-[50px] hover:text-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-colors duration-300">
                        <span class="grow my-auto">Lihat Semua</span>
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/d635062fcd219fe661a426ae39ffad52471b18c57881ec57049e6e0a178f918f?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="" class="object-contain shrink-0 aspect-square w-[18px] sm:w-[20px] md:w-[23px]" />
                    </a>
                </div>
                <div class="mt-8 sm:mt-12 md:mt-16 max-w-full">
                    <FILE path="peduli-sungai-surabaya-responsive-section.html">
                        <div class="flex flex-wrap gap-5 justify-between w-full max-md:flex-col">
                            <article class="flex flex-col w-full md:w-[32%] max-md:mt-9">
                                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/404c03f952711746ccbfee506835a3c52a98e93a4c368bbb9df415e8a0623c4b?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="News article image" class="object-cover w-full rounded-xl aspect-square" />
                                <div class="flex gap-2 mt-5 text-sm sm:text-base text-black text-opacity-30">
                                    <span>Peduli Sungai Surabaya</span>
                                    <span class="flex shrink-0 self-start w-2 h-2 rounded-full bg-black bg-opacity-30"></span>
                                    <span>1 bulan lalu</span>
                                </div>
                                <h3 class="mt-5 text-lg sm:text-xl font-bold text-black">Pentingnya menjaga lingkungan untuk kesehatan</h3>
                                <p class="mt-4 sm:mt-9 text-base sm:text-lg text-black">Ciptakan masa depan sehat dengan menjaga lingkungan!</p>
                            </article>
                            <article class="flex flex-col w-full md:w-[32%] max-md:mt-9">
                                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/9c779f909e3efd34390c57dc323e3831a66f8207bc9f4e99e133ac993529e486?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="News article image" class="object-cover w-full rounded-xl aspect-square" />
                                <div class="flex gap-2 mt-5 text-sm sm:text-base text-black text-opacity-30">
                                    <span>Peduli Sungai Surabaya</span>
                                    <span class="flex shrink-0 self-start w-2 h-2 rounded-full bg-black bg-opacity-30"></span>
                                    <span>2 jam lalu</span>
                                </div>
                                <h3 class="mt-3.5 text-lg sm:text-xl font-bold text-black">Cara mengolah limbah plastik menjadi tempat duduk ramah lingkungan</h3>
                                <p class="mt-4 text-base sm:text-lg text-black">Mengolah limbah plastik menjadi hal yang lebih bermanfaat</p>
                            </article>
                            <article class="flex flex-col w-full md:w-[32%] max-md:mt-9">
                                <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/80b1fe7b8219a1eb93c2b991c55e63079eb33dc4e0793ddeecb2afdea3348a31?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="News article image" class="object-cover w-full rounded-xl aspect-square" />
                                <div class="flex gap-2 mt-5 text-sm sm:text-base text-black text-opacity-30">
                                    <span>Peduli Sungai Surabaya</span>
                                    <span class="flex shrink-0 self-start w-2 h-2 rounded-full bg-black bg-opacity-30"></span>
                                    <span>1 jam lalu</span>
                                </div>
                                <h3 class="mt-3.5 text-lg sm:text-xl font-bold text-black">Ciri-ciri sungai yang bersih dan aman untuk digunakan</h3>
                                <p class="mt-4 sm:mt-10 text-base sm:text-lg text-black">Sungai sangat memberikan manfaat bagi kita namun perlu berhati-hati dalam menggunakan air sungai. Seperti apa sih sungai yang bersih dan aman digunakan?</p>
                            </article>
                        </div>
                </div>
            </section>
            <section class="self-stretch mt-16 sm:mt-20 md:mt-24 max-w-full">
                <div class="flex flex-wrap gap-5 justify-between max-md:flex-col">
                    <div class="w-full md:w-6/12">
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/10fb14906fb386751c07e4c51da98fb85a465b4590122dbd5f4121f5d47497fd?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="Donation campaign image" class="object-contain w-full aspect-square max-md:mt-10 max-w-full" />
                    </div>
                    <div class="flex flex-col items-start self-stretch w-full md:w-6/12 text-xl font-bold max-md:mt-10 max-w-full">
                        <h2 class="text-2xl sm:text-3xl md:text-4xl text-blue-950">Kami Butuh Anda</h2>
                        <p class="self-stretch mt-8 sm:mt-10 md:mt-14 text-base sm:text-lg md:text-xl text-black max-w-full">
                            Yuk, bersama-sama kita jaga kebersihan lingkungan! Dengan setiap sumbangan Anda, kami dapat melakukan aksi pembersihan dan pelestarian alam yang lebih baik. Bantu kami menjadikan dunia ini tempat yang lebih bersih dan hijau dengan berdonasi sekarang.
                        </p>
                        <a href="#donate" class="flex gap-4 sm:gap-5 md:gap-6 items-center px-6 sm:px-8 md:px-10 py-2 sm:py-3 mt-5 sm:mt-6 md:mt-7 text-center bg-blue-500 rounded-[50px] text-stone-50 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 transition-colors duration-300">
                            <span class="text-base sm:text-lg md:text-xl">Berikan Donasi</span>
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/5894f5183a22c2511cf7a0b1da41f2af8697102edb503f946691bf7fdd0eaf5e?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="" class="object-contain shrink-0 w-6 sm:w-7 md:w-8 aspect-square" />
                        </a>
                    </div>
                </div>
            </section>
        </main>
        <footer class="flex flex-col justify-center items-start px-4 sm:px-8 md:px-12 lg:px-16 py-8 mt-16 sm:mt-20 md:mt-24 w-full text-base sm:text-lg md:text-xl text-white bg-blue-950">
            <div class="flex flex-wrap gap-8 justify-between w-full max-w-[955px] max-md:flex-col">
                <address class="not-italic my-auto w-full md:w-[359px]">
                    Peduli Sungai Surabaya<br /><br />
                    Jl. Basuki Rahmat 194<br />
                    Surabaya, Jawa Timur<br />
                    60265
                </address>
                <nav class="flex flex-col justify-center whitespace-nowrap">
                    <a href="#home" class="hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">Home</a>
                    <a href="#tentang" class="mt-4 sm:mt-6 md:mt-8 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">Tentang</a>
                    <a href="#aksi" class="mt-4 sm:mt-6 md:mt-8 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">Aksi</a>
                    <a href="#berita" class="mt-4 sm:mt-6 md:mt-8 hover:underline focus:outline-none focus:ring-2 focus:ring-blue-500">Berita</a>
                </nav>
                <div class="flex flex-col self-start mt-8 sm:mt-10 md:mt-11">
                    <h3 class="self-start text-lg sm:text-xl md:text-2xl">Ikuti Kami</h3>
                    <div class="flex gap-4 mt-4 sm:mt-5 md:mt-6">
                        <a href="#facebook" aria-label="Facebook" class="focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8f9fd8503043e7bc12ef3bda655c7ed7ad862e66786f10d3fca3a67ff9457762?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484facebook" alt="Facebook icon" class="object-contain w-8 sm:w-9 md:w-10 aspect-square" />
                        </a>
                        <a href="#twitter" aria-label="Twitter" class="focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8f9fd8503043e7bc12ef3bda655c7ed7ad862e66786f10d3fca3a67ff9457762?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484twitter" alt="Twitter icon" class="object-contain w-8 sm:w-9 md:w-10 aspect-square" />
                        </a>
                        <a href="#instagram" aria-label="Instagram" class="focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/8f9fd8503043e7bc12ef3bda655c7ed7ad862e66786f10d3fca3a67ff9457762?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484instagram" alt="Instagram icon" class="object-contain w-8 sm:w-9 md:w-10 aspect-square" />
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>