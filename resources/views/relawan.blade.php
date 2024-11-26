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
                                            src="assets\Relawan\Photo\image1.png" 
                                            alt="Peduli Sungai Surabaya activity image 1" 
                                            class="object-contain aspect-[1.01] rounded-[177px] w-[217px] max-md:w-full"
                                        />
                                        <img 
                                            loading="lazy" 
                                            src="assets\Relawan\Photo\image2.png" 
                                            alt="Peduli Sungai Surabaya activity image 2" 
                                            class="object-contain mt-11 aspect-[1.01] rounded-[177px] w-[219px] max-md:mt-10 max-md:w-full z-0"
                                        />
                                    </div>
                                </div>
                                <!-- Gambar 3 -->
                                <div class="flex flex-col ml-5 w-6/12 max-md:ml-0 max-md:w-full">
                                    <img 
                                        loading="lazy" 
                                        src="assets\Relawan\Photo\image3.png" 
                                        alt="Peduli Sungai Surabaya activity image 3" 
                                        class="object-contain shrink-0 self-stretch my-auto max-w-full aspect-[1.01] rounded-[248px] w-full max-md:mt-10" 
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <!-- Kolom Kanan (Deskripsi) -->
                    <div class="p-10 bg-blue-950 text-white max-w-lg mx-auto rounded-lg max-md:w-full">
                        <!-- Judul -->
                        <h2 class="text-3xl font-bold text-blue-400 mb-6 italic">Relawan</h2>
                    
                        <!-- Deskripsi -->
                        <p class="text-lg leading-relaxed mb-6">
                            Sungai Surabaya Membutuhkan Anda! Jika Anda memiliki minat dalam melindungi alam dan ingin berbagi waktu dan keterampilan Anda, kami akan dengan senang hati menerima kontribusi Anda.
                        </p>
                    
                        <!-- Periode -->
                        <p class="px-4 py-4 text-xl font-bold text-blue-900 rounded-xl bg-zinc-300 max-md:pr-5">
                            Periode Daftar : 25-31 Oktober 2023
                        </p>
                    
                        <!-- Tombol -->
                        <div class="flex gap-12 self-start mt-7 text-xl flex-wrap justify-center max-md:flex-col max-md:gap-4">
                            <button class="px-8 py-3 border border-blue-500 border-solid rounded-[50px] text-blue-500 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500 max-md:px-5">
                              Contact Person
                            </button>
                            <button class="px-16 py-3 bg-blue-500 text-white rounded-[50px] hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 max-md:px-5">
                              Daftar
                            </button>
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
            <h2 class="text-4xl font-bold text-center text-black">Divisi yang Tersedia</h2>
            <div class="flex flex-wrap gap-10 mt-9 text-xl font-bold text-center whitespace-nowrap justify-center w-full">
                <button class="grow px-14 py-6 bg-blue-900 rounded-xl text-stone-50 w-full sm:w-auto hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-900 max-md:px-5">
                    Keuntungan
                </button>
                <button id="modal-button-kualifikasi" class="grow px-14 py-6 rounded-xl border border-black border-solid text-blue-900 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-900 w-full sm:w-auto max-md:px-5">
                    Kualifikasi
                </button>
            </div>
        </section>
        
      
    
        <section class="mt-12 w-full max-w-[1400px] max-md:mt-10 max-md:max-w-full">
            <div class="flex flex-wrap justify-center gap-5 max-md:flex-wrap">
                <!-- Design Grafis -->
                <article class="flex flex-col w-1/5 max-md:w-full">
                <div class="flex flex-col grow px-px pt-12 w-full text-xl font-bold text-center rounded-xl bg-slate-200 text-stone-50 max-md:mt-8">
                    <img loading="lazy" src="assets\Relawan\icon\DesignGrafis.png" alt="Graphic Design Division Icon" class="object-contain self-center w-40 max-w-full aspect-square" />
                    <h3 id="modal-button-design-grafis" class="px-14 py-3.5 mt-8 bg-blue-500 rounded-none max-md:px-5 cursor-pointer flex justify-center items-center whitespace-nowrap">
                    Desain Grafis
                    </h3>
                </div>
                </article>
            
                <!-- Copywriter -->
                <article class="flex flex-col w-1/5 max-md:w-full">
                <div class="flex flex-col grow px-px pt-12 w-full text-xl font-bold text-center rounded-xl bg-slate-200 text-stone-50 max-md:mt-8">
                    <img loading="lazy" src="assets\Relawan\icon\Copywriter.png" alt="Graphic Design Division Icon" class="object-contain self-center w-40 max-w-full aspect-square" />
                    <h3 id="modal-button-copywriter" class="px-14 py-3.5 mt-8 bg-blue-500 rounded-none max-md:px-5 cursor-pointer flex justify-center items-center whitespace-nowrap">Copywriter</h3>
                </div>
                </article>
            
                <!-- Creative Program -->
                <article class="flex flex-col w-1/5 max-md:w-full">
                <div class="flex flex-col grow px-px pt-12 w-full text-xl font-bold text-center rounded-xl bg-slate-200 text-stone-50 max-md:mt-8">
                    <img loading="lazy" src="assets\Relawan\icon\CreativeProgram.png" alt="Graphic Design Division Icon" class="object-contain self-center w-40 max-w-full aspect-square" />
                    <h3 id="modal-button-creative-program" class="px-14 py-3.5 mt-8 bg-blue-500 rounded-none max-md:px-5 cursor-pointer flex justify-center items-center whitespace-nowrap">Creative Program</h3>
                </div>
                </article>
            
                <!-- R & D -->
                <article class="flex flex-col w-1/5 max-md:w-full">
                <div class="flex flex-col grow px-px pt-12 w-full text-xl font-bold text-center rounded-xl bg-slate-200 text-stone-50 max-md:mt-8">
                    <img loading="lazy" src="assets\Relawan\icon\R&D.png" alt="Graphic Design Division Icon" class="object-contain self-center w-40 max-w-full aspect-square" />
                    <h3 id="modal-button-r-and-d" class="px-14 py-3.5 mt-8 bg-blue-500 rounded-none max-md:px-5 cursor-pointer flex justify-center items-center whitespace-nowrap">R & D</h3>
                </div>
                </article>
            </div>
    
            <section class="mt-12 mb-12 w-full max-w-[1400px] max-md:mt-10 max-md:max-w-full">
                <div class="flex flex-wrap justify-center gap-5 max-md:flex-wrap">
                    <!-- Admin Sosial Media -->
                    <article class="flex flex-col w-1/5 max-md:w-full">
                    <div class="flex flex-col grow px-px pt-12 w-full text-xl font-bold text-center rounded-xl bg-slate-200 text-stone-50 max-md:mt-8">
                        <img loading="lazy" src="assets\Relawan\icon\ASM.png" alt="Graphic Design Division Icon" class="object-contain self-center w-40 max-w-full aspect-square" />
                        <h3 id="modal-button-admin-sosmed" class="px-14 py-3.5 mt-8 bg-blue-500 rounded-none max-md:px-5 cursor-pointer flex justify-center items-center whitespace-nowrap">Admin Sosial Media</h3>
                    </div>
                    </article>
                
                    <!-- Business Development -->
                    <article class="flex flex-col w-1/5 max-md:w-full">
                    <div class="flex flex-col grow px-px pt-12 w-full text-xl font-bold text-center rounded-xl bg-slate-200 text-stone-50 max-md:mt-8">
                        <img loading="lazy" src="assets\Relawan\icon\BD.png" alt="Graphic Design Division Icon" class="object-contain self-center w-40 max-w-full aspect-square" />
                        <h3 id="modal-button-business-development" class="px-14 py-3.5 mt-8 bg-blue-500 rounded-none max-md:px-5 cursor-pointer flex justify-center items-center whitespace-nowrap">Business Development</h3>
                    </div>
                    </article>
                
                    <!-- Content Creator -->
                    <article class="flex flex-col w-1/5 max-md:w-full">
                    <div class="flex flex-col grow px-px pt-12 w-full text-xl font-bold text-center rounded-xl bg-slate-200 text-stone-50 max-md:mt-8">
                        <img loading="lazy" src="assets\Relawan\icon\CC.png" alt="Graphic Design Division Icon" class="object-contain self-center w-40 max-w-full aspect-square" />
                        <h3 id="modal-button-content-creator" class="px-14 py-3.5 mt-8 bg-blue-500 rounded-none max-md:px-5 cursor-pointer flex justify-center items-center whitespace-nowrap">Content Creator</h3>
                    </div>
                    </article>
                
                    <!-- Human Resource -->
                    <article class="flex flex-col w-1/5 max-md:w-full">
                    <div class="flex flex-col grow px-px pt-12 w-full text-xl font-bold text-center rounded-xl bg-slate-200 text-stone-50 max-md:mt-8">
                        <img loading="lazy" src="assets\Relawan\icon\HR.png" alt="Graphic Design Division Icon" class="object-contain self-center w-40 max-w-full aspect-square" />
                        <h3 id="modal-button-human-resource" class="px-14 py-3.5 mt-8 bg-blue-500 rounded-none max-md:px-5 cursor-pointer flex justify-center items-center whitespace-nowrap">Human Resource</h3>
                    </div>
                    </article>
                </div>
            </section>
        </section>
    
    </section>
    
    <!-- Modal -->
    
    <div id="kualifikasiModal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
        <div id="kualifikasi" class="bg-white rounded-lg w-11/12 sm:w-3/4 md:w-2/3 lg:w-1/2 flex transform translate-x-full opacity-0 transition-all duration-500 ease-in-out">
            <!-- Gambar -->
            <div class="w-1/2 flex-shrink-0">
                <img src="assets\Relawan\Photo\image4.png" alt="Kualifikasi Image" class="h-full w-full object-cover rounded-l-lg">
            </div>
    
            <!-- Konten Modal -->
            <div class="w-1/2 flex flex-col justify-center">
                <div class="p-6">
                    <h2 class="text-xl font-bold">Kualifikasi</h2>
                    <p class="mt-4">
                        • Usia minimal 15 tahun.<br>
                        • Memiliki jiwa sosial yang tinggi.<br>
                        • Memiliki kemampuan manajemen waktu yang baik.<br>
                        • Memiliki koneksi internet yang baik.<br>
                        • Fast response, disiplin dan kreatif.<br>
                        • Update dengan isu-isu lingkungan terkini.<br>
                        • Memiliki basic skill atau pengalaman di bidang yang diapply.<br>
                        • Berkomitmen selama kurang lebih 3 bulan.
                    </p>
                    {{-- <button id="close-modal-kualifikasi" class="mt-4 bg-red-500 text-white py-2 px-4 rounded">Tutup</button> --}}
    
                    <div class="flex gap-4 self-start mt-7 text-xl flex-wrap justify-center max-md:flex-col max-md:gap-4">
                        <button class="px-2 py-2  bg-blue-500 text-white rounded-[50px] text-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 max-md:px-5">
                          Gabung Sekarang →
                        </button>
                        <button id="close-modal-kualifikasi" class="px-2 py-2 bg-red-500 text-white rounded-[50px] hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 max-md:px-5">
                          Tutup
                        </button>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div id="desainGrafisModal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
        <div id="desain-grafis" class="bg-white p-8 rounded-lg w-11/12 sm:w-1/2 md:w-1/3 transform translate-x-full opacity-0 transition-all duration-500 ease-in-out">
            
            <h2 class="text-xl font-bold">Desain Grafis</h2>
    
            <p class="mt-4">• Membuat visualisasi konten sosial media (Instagram dan TikTok) baik gambar, reels, dan video pendek.</p>
    
            <p class="mt-4">• Berkoordinasi dengan social media specialist untuk membuat konten.</p>
    
            <p class="mt-4">• Membantu kebutuhan desain proposal, template ppt, dsb</p>
            
    
            <div class="flex gap-4 self-start text-xl flex-wrap justify-center max-md:flex-col max-md:gap-4">
                <button id="close-modal-design-grafis" class="mt-4 bg-red-500 text-white py-2 px-4 rounded-[50px] hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Tutup</button>
    
                <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-[50px] hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Gabung Sekarang →</button>
            </div>
    
        </div>
    </div>
    
    <div id="copywriterModal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
        <div id="copywriter" class="bg-white p-8 rounded-lg w-11/12 sm:w-1/2 md:w-1/3 transform translate-x-full opacity-0 transition-all duration-500 ease-in-out">
            
            <h2 class="text-xl font-bold">Copywriter</h2>
    
            <p class="mt-4">• Membuat narasi/ caption untuk keperluan content di PSS.</p>
    
            <p class="mt-4">• Membuat narasi report kegiatan/program PSS untuk publikasi sosial media.</p>
    
            <p class="mt-4">• Membantu menyusun proposal pitching dan presentasi.</p>
    
            <div class="flex gap-4 self-start text-xl flex-wrap justify-center max-md:flex-col max-md:gap-4">
                <button id="close-modal-copywriter" class="mt-4 bg-red-500 text-white py-2 px-4 rounded-[50px] hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Tutup</button>
    
                <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-[50px] hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Gabung Sekarang →</button>
            </div>
            
        </div>
    </div>
    
    <div id="creativeProgramModal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
        <div id="creative-program" class="bg-white p-8 rounded-lg w-11/12 sm:w-1/2 md:w-1/3 transform translate-x-full opacity-0 transition-all duration-500 ease-in-out">
            
            <h2 class="text-xl font-bold">Creative Program</h2>
    
            <p class="mt-4">• Membuat ide-ide menarik tentang program yang sejalan dengan misi PSS.</p>
    
            <p class="mt-4">• Menjalankan program-program PSS.</p>
    
            <p class="mt-4">• Membuat budgeting program dan pelaporannya.</p>
    
            <p class="mt-4">• Monitoring pelaksanaan program PSS.</p>
    
            <p class="mt-4">• Membuat report pelaksanaan program.</p>
    
            <div class="flex gap-4 self-start text-xl flex-wrap justify-center max-md:flex-col max-md:gap-4">
                <button id="close-modal-creative-program" class="mt-4 bg-red-500 text-white py-2 px-4 rounded-[50px] hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Tutup</button>
    
                <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-[50px] hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Gabung Sekarang →</button>
            </div>
    
        </div>
    </div>
    
    <div id="rAndDModal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
        <div id="r-and-d" class="bg-white p-8 rounded-lg w-11/12 sm:w-1/2 md:w-1/3 transform translate-x-full opacity-0 transition-all duration-500 ease-in-out">
            
            <h2 class="text-xl font-bold">R & D</h2>
    
            <p class="mt-4">• Meriset tentang persoalan sampah dan kualitas air untuk publikasi dan pendukung modul.</p>
    
            <p class="mt-4">• Membuat publikasi yang informatif dan edukatif tentang BijakNyampah.</p>
    
            <p class="mt-4">• Membuat bahan untuk advokasi kebijakan dan sharing dengan instansi terkait agar mendapat dukungan kolaborasi program.</p>
    
            <div class="flex gap-4 self-start text-xl flex-wrap justify-center max-md:flex-col max-md:gap-4">
                <button id="close-modal-r-and-d" class="mt-4 bg-red-500 text-white py-2 px-4 rounded-[50px] hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Tutup</button>
    
                <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-[50px] hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Gabung Sekarang →</button>
            </div>
            
        </div>
    </div>
    
    <div id="adminSosmedModal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
        <div id="admin-sosmed" class="bg-white p-8 rounded-lg w-11/12 sm:w-1/2 md:w-1/3 transform translate-x-full opacity-0 transition-all duration-500 ease-in-out">
            
            <h2 class="text-xl font-bold">Admin Sosial Media</h2>
            
            <p class="mt-4">• Menghandle sosial media Peduli Sungai Surabaya.</p>
    
            <p class="mt-4">• Menaikkan follower dan traffic sosial media (Instagram, TikTok, Linkedin) secara organik.</p>
    
            <p class="mt-4">• Membuat content plan sosial media.</p>
    
            <p class="mt-4">• Monitor strategi sosial media PSS.</p>
    
            <p class="mt-4">• Berkoordinasi dengan desain grafis untuk visualisasi konten dan copywriter untuk narasi/caption.</p>
    
            <div class="flex gap-4 self-start text-xl flex-wrap justify-center max-md:flex-col max-md:gap-4">
                <button id="close-modal-admin-sosmed" class="mt-4 bg-red-500 text-white py-2 px-4 rounded-[50px] hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Tutup</button>
    
                <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-[50px] hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Gabung Sekarang →</button>
            </div>
            
        </div>
    </div>
    
    <div id="businessDevelopmentModal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
        <div id="business-development" class="bg-white p-8 rounded-lg w-11/12 sm:w-1/2 md:w-1/3 transform translate-x-full opacity-0 transition-all duration-500 ease-in-out">
            
            <h2 class="text-xl font-bold">Business Development</h2>
            
            <p class="mt-4">• Menjalin relasi dengan komunitas, NGO, perusahaan, sekolah dan kampus yang potensial untuk program dan funding PSS.</p>
    
            <p class="mt-4">• Melakukan presentasi untuk menghasilkan dukungan dan kolaborasi dengan PSS.</p>
    
            <p class="mt-4">• Membuat dan implementasi skema bisnis yang bisa mendukung operasional PSS.</p>
    
            <p class="mt-4">• Membuat dan implementasi strategimendapatkan CSR dan dana sponsor/donor.</p>
    
            <div class="flex gap-4 self-start text-xl flex-wrap justify-center max-md:flex-col max-md:gap-4">
                <button id="close-modal-business-development" class="mt-4 bg-red-500 text-white py-2 px-4 rounded-[50px] hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Tutup</button>
    
                <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-[50px] hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Gabung Sekarang →</button>
            </div>
            
        </div>
    </div>
    
    <div id="contentCreatorModal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
        <div id="content-creator" class="bg-white p-8 rounded-lg w-11/12 sm:w-1/2 md:w-1/3 transform translate-x-full opacity-0 transition-all duration-500 ease-in-out">
            
            <h2 class="text-xl font-bold">Content Creator</h2>
            
            <p class="mt-4">• Memberikan ide untuk content visual di sosial media.</p>
    
            <p class="mt-4">• Menjadi talent dalam content sosial media PSS.</p>
    
            <p class="mt-4">• Membuat rangkaian campaign program PSS.</p>
    
            <div class="flex gap-4 self-start text-xl flex-wrap justify-center max-md:flex-col max-md:gap-4">
                <button id="close-modal-content-creator" class="mt-4 bg-red-500 text-white py-2 px-4 rounded-[50px] hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Tutup</button>
    
                <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-[50px] hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Gabung Sekarang →</button>
            </div>
            
        </div>
    </div>
    
    <div id="humanResourceModal" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex items-center justify-center hidden">
        <div id="human-resource" class="bg-white p-8 rounded-lg w-11/12 sm:w-1/2 md:w-1/3 transform translate-x-full opacity-0 transition-all duration-500 ease-in-out">
            
            <h2 class="text-xl font-bold">Human Resource</h2>
            
            <p class="mt-4">• Membantu pelaksanaan rekrutmen relawan event dan relawan mentor.</p>
    
            <p class="mt-4">• Melakukan kegiatan bonding relawan.</p>
    
            <p class="mt-4">• Melakukan maintain pada relawan selama bertugas.</p>
    
            <p class="mt-4">• Membantu problem solving relawan agar tetap optimal dalam berperan.</p>
    
            <div class="flex gap-4 self-start text-xl flex-wrap justify-center max-md:flex-col max-md:gap-4">
                <button id="close-modal-human-resource" class="mt-4 bg-red-500 text-white py-2 px-4 rounded-[50px] hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">Tutup</button>
    
                <button class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-[50px] hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Gabung Sekarang →</button>
            </div>
            
        </div>
    </div>
    
    <!-- script -->
    <script>
    
        // Ambil elemen tombol dan modal
        const modalButtonKualifikasi = document.getElementById('modal-button-kualifikasi');
        const modalKualifikasi = document.getElementById('kualifikasiModal');
        const modalContentKualifikasi = document.getElementById('kualifikasi');
        const closeModalKualifikasi = document.getElementById('close-modal-kualifikasi');
    
        // Tampilkan modal dengan animasi ketika tombol diklik
        modalButtonKualifikasi.addEventListener('click', () => {
            modalKualifikasi.classList.remove('hidden');
            setTimeout(() => {
            modalContentKualifikasi.classList.remove('translate-x-full', 'opacity-0');
            }, 10);
        });
    
        // Tutup modal dengan animasi ketika tombol tutup diklik
        closeModalKualifikasi.addEventListener('click', () => {
            modalContentKualifikasi.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => {
            modalKualifikasi.classList.add('hidden');
            }, 500);
        });
    
    
    
        // Ambil elemen tombol dan modal
        const modalButton1 = document.getElementById('modal-button-design-grafis');
        const modal1 = document.getElementById('desainGrafisModal');
        const modalContent1 = document.getElementById('desain-grafis');
        const closeModal1 = document.getElementById('close-modal-design-grafis');
    
        // Tampilkan modal dengan animasi ketika tombol diklik
        modalButton1.addEventListener('click', () => {
            modal1.classList.remove('hidden');
            setTimeout(() => {
            modalContent1.classList.remove('translate-x-full', 'opacity-0');
            }, 10);
        });
    
        // Tutup modal dengan animasi ketika tombol tutup diklik
        closeModal1.addEventListener('click', () => {
            modalContent1.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => {
            modal1.classList.add('hidden');
            }, 500);
        });
    
    
    
        // Ambil elemen tombol dan modal
        const modalButton2 = document.getElementById('modal-button-copywriter');
        const modal2 = document.getElementById('copywriterModal');
        const modalContent2 = document.getElementById('copywriter');
        const closeModal2 = document.getElementById('close-modal-copywriter');
    
        // Tampilkan modal dengan animasi ketika tombol diklik
        modalButton2.addEventListener('click', () => {
            modal2.classList.remove('hidden');
            setTimeout(() => {
            modalContent2.classList.remove('translate-x-full', 'opacity-0');
            }, 10);
        });
    
        // Tutup modal dengan animasi ketika tombol tutup diklik
        closeModal2.addEventListener('click', () => {
            modalContent2.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => {
            modal2.classList.add('hidden');
            }, 500);
        });
    
    
    
        // Ambil elemen tombol dan modal
        const modalButton3 = document.getElementById('modal-button-creative-program');
        const modal3 = document.getElementById('creativeProgramModal');
        const modalContent3 = document.getElementById('creative-program');
        const closeModal3 = document.getElementById('close-modal-creative-program');
    
        // Tampilkan modal dengan animasi ketika tombol diklik
        modalButton3.addEventListener('click', () => {
            modal3.classList.remove('hidden');
            setTimeout(() => {
            modalContent3.classList.remove('translate-x-full', 'opacity-0');
            }, 10);
        });
    
        // Tutup modal dengan animasi ketika tombol tutup diklik
        closeModal3.addEventListener('click', () => {
            modalContent3.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => {
            modal3.classList.add('hidden');
            }, 500);
        });
    
    
    
        // Ambil elemen tombol dan modal
        const modalButton4 = document.getElementById('modal-button-r-and-d');
        const modal4 = document.getElementById('rAndDModal');
        const modalContent4 = document.getElementById('r-and-d');
        const closeModal4 = document.getElementById('close-modal-r-and-d');
    
        // Tampilkan modal dengan animasi ketika tombol diklik
        modalButton4.addEventListener('click', () => {
            modal4.classList.remove('hidden');
            setTimeout(() => {
            modalContent4.classList.remove('translate-x-full', 'opacity-0');
            }, 10);
        });
    
        // Tutup modal dengan animasi ketika tombol tutup diklik
        closeModal4.addEventListener('click', () => {
            modalContent4.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => {
            modal4.classList.add('hidden');
            }, 500);
        });
    
    
    
        // Ambil elemen tombol dan modal
        const modalButton5 = document.getElementById('modal-button-admin-sosmed');
        const modal5 = document.getElementById('adminSosmedModal');
        const modalContent5 = document.getElementById('admin-sosmed');
        const closeModal5 = document.getElementById('close-modal-admin-sosmed');
    
        // Tampilkan modal dengan animasi ketika tombol diklik
        modalButton5.addEventListener('click', () => {
            modal5.classList.remove('hidden');
            setTimeout(() => {
            modalContent5.classList.remove('translate-x-full', 'opacity-0');
            }, 10);
        });
    
        // Tutup modal dengan animasi ketika tombol tutup diklik
        closeModal5.addEventListener('click', () => {
            modalContent5.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => {
            modal5.classList.add('hidden');
            }, 500);
        });
    
    
    
        // Ambil elemen tombol dan modal
        const modalButton6 = document.getElementById('modal-button-business-development');
        const modal6 = document.getElementById('businessDevelopmentModal');
        const modalContent6 = document.getElementById('business-development');
        const closeModal6 = document.getElementById('close-modal-business-development');
    
        // Tampilkan modal dengan animasi ketika tombol diklik
        modalButton6.addEventListener('click', () => {
            modal6.classList.remove('hidden');
            setTimeout(() => {
            modalContent6.classList.remove('translate-x-full', 'opacity-0');
            }, 10);
        });
    
        // Tutup modal dengan animasi ketika tombol tutup diklik
        closeModal6.addEventListener('click', () => {
            modalContent6.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => {
            modal6.classList.add('hidden');
            }, 500);
        });
    
    
    
        // Ambil elemen tombol dan modal
        const modalButton7 = document.getElementById('modal-button-content-creator');
        const modal7 = document.getElementById('contentCreatorModal');
        const modalContent7 = document.getElementById('content-creator');
        const closeModal7 = document.getElementById('close-modal-content-creator');
    
        // Tampilkan modal dengan animasi ketika tombol diklik
        modalButton7.addEventListener('click', () => {
            modal7.classList.remove('hidden');
            setTimeout(() => {
            modalContent7.classList.remove('translate-x-full', 'opacity-0');
            }, 10);
        });
    
        // Tutup modal dengan animasi ketika tombol tutup diklik
        closeModal7.addEventListener('click', () => {
            modalContent7.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => {
            modal7.classList.add('hidden');
            }, 500);
        });
    
    
    
        // Ambil elemen tombol dan modal
        const modalButton8 = document.getElementById('modal-button-human-resource');
        const modal8 = document.getElementById('humanResourceModal');
        const modalContent8 = document.getElementById('human-resource');
        const closeModal8 = document.getElementById('close-modal-human-resource');
    
        // Tampilkan modal dengan animasi ketika tombol diklik
        modalButton8.addEventListener('click', () => {
            modal8.classList.remove('hidden');
            setTimeout(() => {
            modalContent8.classList.remove('translate-x-full', 'opacity-0');
            }, 10);
        });
    
        // Tutup modal dengan animasi ketika tombol tutup diklik
        closeModal8.addEventListener('click', () => {
            modalContent8.classList.add('translate-x-full', 'opacity-0');
            setTimeout(() => {
            modal8.classList.add('hidden');
            }, 500);
        });
    </script>
    

    <!-- Footer -->
    @include('includes.footer')
</div>
@endsection