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
                  src="{{asset($firstArtikel->image)}}"
                  alt="PSS cleaning river"
                  class="w-full rounded-3xl aspect-[1.27] object-cover"
                />
                <h3 class="mt-10 text-3xl font-bold">{{$firstArtikel->title}}</h3>
                <time datetime="2023-09-30" class="mt-3.5 text-black text-opacity-30">{{$firstArtikel->date}}</time>
                <p class="mt-5">
                  {{$firstArtikel->description}}
                </p>
              </article>
        
              <!-- Garis Vertikal -->
              <div class="border-l-2 border-black border-opacity-10"></div>
        
              <!-- Artikel Tambahan -->
              @foreach ($allArtikels as $artikel)
              <aside class="flex flex-col w-[57%] max-md:w-full overflow-y-auto max-h-[500px]">
                <article class="flex flex-col">
                  <h3 class="text-3xl font-bold">{{$artikel->title}}</h3>
                  <time datetime="2023-09-17" class="mt-2 text-black text-opacity-30">{{$artikel->date}}</time>
                  <p class="mt-3.5">
                    {{$artikel->description}}
                  </p>
                  <hr class="mt-7 border-dashed border-[5px] border-black border-opacity-10" />
                </article>
                @endforeach
            </div>
            
          </main>
      </section>
    <!-- Footer -->
    @include('includes.footer')
  </div>
@endsection