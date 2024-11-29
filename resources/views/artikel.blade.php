@extends('base.app')

@section('content')
<div class="bg-black">
    <!-- Navigation Bar -->
    @include('includes.header')

    <section class="flex flex-col bg-stone-50 overflow-hidden">
        <main class="flex flex-col w-full px-20 mt-10 max-md:px-5">
          <!-- Judul Berita -->
          <h2 class="text-4xl font-bold mb-8">Berita Terbaru</h2>
      
          <!-- Container Artikel -->
          <div class="flex gap-5 max-md:flex-col max-md:w-full">
            <!-- Artikel Utama -->
            <article class="flex flex-col w-[43%] max-md:w-full max-h-full">
              <img 
                loading="lazy"
                src="https://cdn.builder.io/api/v1/image/assets/TEMP/e0059ebe9b1ac3d87ec82b01509dd460e0df161541a75ef3f2c347ed45ab168d?placeholderIfAbsent=true&apiKey=c1377a7c791a4a95a2c1ef4a3fe24484"
                alt="PSS cleaning river"
                class="w-full rounded-3xl aspect-[1.27] object-cover"
              />
              <h3 class="mt-10 text-3xl font-bold">PSS Kembali Lakukan Bersih-Bersih Sungai</h3>
              <time datetime="2023-09-30" class="mt-3.5 text-black text-opacity-30">30 September 2023</time>
              <p class="mt-5">
                Peduli Sungai Surabaya (PSS) bersama BARBOSA dan PATAKA kembali
                mengadakan kegiatan bersih-bersih sungai di Surabaya pada Sabtu, 23
                September 2023 kemarin.
              </p>
            </article>
      
            <!-- Garis Vertikal -->
            <div class="border-l-2 border-black border-opacity-10"></div>
      
            <!-- Artikel Tambahan -->
            <aside class="flex flex-col w-[57%] max-md:w-full overflow-y-auto max-h-[500px]">
              <!-- Artikel 1 -->
              <article class="flex flex-col">
                <h3 class="text-3xl font-bold">Pentingnya menjaga lingkungan untuk kesehatan</h3>
                <time datetime="2023-09-17" class="mt-2 text-black text-opacity-30">17 September 2023</time>
                <p class="mt-3.5">
                  Ciptakan masa depan sehat dengan menjaga lingkungan! Langkah kecil
                  dalam merawat bumi kita tidak hanya melestarikan alam, tapi juga
                  memastikan kesehatan kita dan generasi mendatang.
                </p>
                <hr class="mt-7 border-dashed border-[5px] border-black border-opacity-10" />
              </article>
      
      
      
              <!-- Artikel lainnya -->
              <article class="flex flex-col mt-4">
                <h3 class="text-3xl font-bold">Ciri-ciri sungai yang bersih dan aman untuk digunakan</h3>
                <time datetime="2023-07-17" class="mt-3.5 text-black text-opacity-30">17 Juli 2023</time>
                <p class="mt-3.5">
                  Sungai sangat memberikan manfaat bagi kita namun perlu berhati-hati dalam menggunakan air sungai. 
                  Seperti apa sih sungai yang bersih dan aman digunakan?
                </p>
              </article>
      
              <!-- Artikel Baru -->
              <article class="flex flex-col mt-4">
                <h3 class="text-3xl font-bold">Edukasi PSS kepada masyarakat</h3>
                <time datetime="2023-11-28" class="mt-3.5 text-black text-opacity-30">5 jam yang lalu</time>
                <p class="mt-3.5">
                  Edukasi ini dilakukan di salah satu sekolah yaitu SMPK Vincentius pada tanggal 17 September 2023 yang membicarakan bagaimana cara mengolah sampah tekstil dan juga membahas tentang kondisi hutan.
                </p>
                <hr class="mt-7 border-dashed border-[5px] border-black border-opacity-10" />
              </article>
            </aside>
          </div>
        </main>
      </section>
      
    <!-- Footer -->
    @include('includes.footer')
</div>
@endsection