@extends('base.app')

@section('content')
<div class="bg-black">
    <!-- Navigation Bar -->
    @include('includes.header')

    <section class="flex overflow-hidden flex-col items-center bg-stone-50">
        <div class="flex flex-col w-full bg-blue-950 max-md:max-w-full">
            <!-- Bagian Konten Utama -->
            <div class="self-center mt-0 ml-5 w-full max-w-[1056px] max-md:max-w-full">
                <div class="flex gap-5 max-md:flex-col">
                    <!-- Kolom Kiri (Gambar) -->
                    <div class="flex flex-col w-[45%] max-md:w-full mt-16">
                        <div class="grow max-md:mt-10 max-md:max-w-full">
                            <div class="flex gap-5 max-md:flex-col">
                                <!-- Gambar 1 & 2 -->
                                <div class="flex flex-col w-6/12 max-md:w-full max-md:ml-0">
                                    <div class="flex flex-col grow z-0 max-md:-mr-0.5">
                                        <img 
                                            loading="lazy" 
                                            src="assets\Donasi\Photo\image1.png" 
                                            alt="Peduli Sungai Surabaya activity image 1" 
                                            class="object-contain aspect-[1.01] rounded-[177px] w-[217px] max-md:w-full"
                                        />
                                        <img 
                                            loading="lazy" 
                                            src="assets\Donasi\Photo\image2.png" 
                                            alt="Peduli Sungai Surabaya activity image 2" 
                                            class="object-contain mt-11 aspect-[1.01] rounded-[177px] w-[219px] max-md:mt-10 max-md:w-full z-0"
                                        />
                                    </div>
                                </div>
                                <!-- Gambar 3 -->
                                <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
                                    <img 
                                        loading="lazy" 
                                        src="assets\Donasi\Photo\image3.png" 
                                        alt="Peduli Sungai Surabaya activity image 3" 
                                        class="object-contain shrink-0 self-stretch my-auto max-w-full aspect-[1.01] rounded-[248px] w-full max-md:mt-10" 
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Kolom Kanan (Deskripsi) -->
                    <div class="p-10 bg-blue-950 text-white max-w-lg mx-auto rounded-lg">
                        <!-- Judul -->
                        <h2 class="text-3xl font-bold text-blue-400 mb-6 italic">Donasi</h2>
                    
                        <!-- Deskripsi -->
                        <p class="text-lg leading-relaxed mb-6">
                            Setiap donasi Anda adalah langkah menuju air bersih dan lingkungan yang lebih sehat. Bergabunglah dengan gerakan kami yang fokus pada perubahan perilaku masyarakat terkait sampah di bantaran sungai. 
                        </p>
                    
                        <!-- Tombol -->
                        <div class="flex justify-between items-center">
                            <img src="assets\Donasi\image1.png" alt="donasi">
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Bagian Dekorasi -->
    
            <div class="flex relative flex-col w-full mt-36">
                <img src="{{ asset('assets/Group 33.png') }}" alt="Deskripsi Gambar" class="w-full h-auto object-contain">
            </div>
            
        </div>
    
        <section class="max-md:mt-10">
            <h2 class="text-4xl font-bold text-center text-black">Bagaimana kami menggunakan <br> donasi anda?</h2>
        </section>
        
      
    
        <section class="mt-12 mb-12 w-full max-w-[1400px] max-md:mt-10 max-md:max-w-full">
            <div class="flex flex-wrap justify-center gap-5 max-md:flex-wrap">
                
                <article class="flex flex-col w-1/5 max-md:w-full">
                    <div class="flex flex-col grow px-px w-full text-xl text-black text-center rounded-xl bg-slate-200 text-stone-50 max-md:mt-8 card-hover">
                        <img loading="lazy" src="assets/Donasi/Photo/infoDonasi.png" alt="Graphic Design Division Icon" class="object-cover self-center w-full h-full aspect-square rounded-xl" />
                        <div class="description-overlay">
                            <p class="text-[20px] text-white p-4" >Menggelar event dan workshop PSS.</p>
                        </div>
                    </div>
                </article>
                
                <article class="flex flex-col w-1/5 max-md:w-full">
                    <div class="flex flex-col grow px-px w-full text-xl text-black text-center rounded-xl bg-slate-200 text-stone-50 max-md:mt-8 card-hover">
                        <img loading="lazy" src="assets/Donasi/Photo/infoDonasi2.png" alt="Graphic Design Division Icon" class="object-cover self-center w-full h-full aspect-square rounded-xl" />
                        <div class="description-overlay">
                            <p class="text-[20px] text-white p-4" >Edukasi yang lebih luas terhadap kepedulian lingkungan.</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        
    
    </section>

    <!-- Footer -->
    @include('includes.footer')
</div>
@endsection