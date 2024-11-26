@extends('base.app')

@section('content')
<div class="bg-black">
    <!-- Navigation Bar -->
    @include('includes.header')

    <section class="flex overflow-hidden flex-col bg-stone-50">
        <main class="flex flex-col px-20 mt-0 w-full max-md:px-5 max-md:max-w-full">
            <div class="max-md:max-w-full">
                <div class="flex gap-5 max-md:flex-col">
                    <article class="flex flex-col w-[43%] max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col grow text-xl text-black max-md:mt-10 max-md:max-w-full">
                            <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/e0059ebe9b1ac3d87ec82b01509dd460e0df161541a75ef3f2c347ed45ab168d?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484" alt="PSS cleaning river" class="object-contain w-full rounded-3xl aspect-[1.27] max-md:max-w-full" />
                            <h3 class="mt-10 text-3xl font-bold max-md:mr-2.5 max-md:max-w-full">PSS Kembali Lakukan Bersih-Bersih Sungai</h3>
                            <time datetime="2023-09-30" class="self-start mt-3.5 text-black text-opacity-30">30 September 2023</time>
                            <p class="mt-5 max-md:mr-2.5 max-md:max-w-full">Peduli Sungai Surabaya (PSS) bersama BARBOSA dan PATAKA kembali mengadakan kegiatan bersih-bersih sungai di Surabaya pada Sabtu, 23 September 2023 kemarin</p>
                        </div>
                    </article>
                    <aside class="flex flex-col ml-5 w-[57%] max-md:ml-0 max-md:w-full">
                        <div class="flex flex-col grow mt-28 max-md:mt-10 max-md:max-w-full">
                            <p class="mr-3 ml-5 text-xl text-black max-md:mr-2.5 max-md:max-w-full">Ciptakan masa depan sehat dengan menjaga lingkungan! Langkah kecil dalam merawat bumi kita tidak hanya melestarikan alam, tapi juga memastikan kesehatan kita dan generasi mendatang.</p>
                            <hr class="shrink-0 mt-7 border-dashed border-[5px] border-black border-opacity-10 h-[5px] max-md:max-w-full" />
                            <hr class="z-10 shrink-0 mt-0 border-dashed border-[5px] border-black border-opacity-10 h-[5px] max-md:max-w-full" />
                            <article class="flex flex-col items-start pr-12 pl-5 mt-4 text-xl text-black max-md:pr-5 max-md:max-w-full">
                                <h3 class="text-3xl font-bold max-md:max-w-full">Cara mengolah limbah plastik menjadi tempat duduk ramah lingkungan</h3>
                                <time datetime="2023-09-17" class="mt-2 text-black text-opacity-30">17 September 2023</time>
                                <p class="self-stretch mt-3.5 max-md:max-w-full">Limbah plastik dapat kita olah menjadi hal yang lebih bermanfaat salah satunya adalah ecobrick yang digunakan untuk membuat tempat duduk yang ramah lingkungan</p>
                            </article>
                            <hr class="shrink-0 mt-3.5 border-dashed border-[5px] border-black border-opacity-10 h-[5px] max-md:max-w-full" />
                            <article class="flex flex-col px-5 mt-4 max-md:max-w-full">
                                <h3 class="text-3xl font-bold text-black max-md:max-w-full">Ciri-ciri sungai yang bersih dan aman untuk digunakan</h3>
                                <time datetime="2023-07-17" class="self-start mt-3.5 text-xl text-black text-opacity-30">17 Juli 2023</time>
                            </article>
                        </div>
                    </aside>
                </div>
            </div>
            <p class="self-end mt-5 mr-9 text-xl text-black max-md:mr-2.5 max-md:max-w-full">Sungai sangat memberikan manfaat bagi kita namun perlu berhati-hati dalam menggunakan air sungai. Seperti apa sih sungai yang bersih dan aman digunakan?</p>
        </main>
    </section>

    <!-- Footer -->
    @include('includes.footer')
</div>
@endsection