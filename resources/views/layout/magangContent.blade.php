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
              <div class="p-10 bg-blue-950 text-white max-w-lg mx-auto rounded-lg">
                  <!-- Judul -->
                  <h2 class="text-3xl font-bold text-blue-400 mb-6 italic">Magang</h2>
              
                  <!-- Deskripsi -->
                  <p class="text-lg leading-relaxed mb-6">
                      Magang di PSS adalah upaya dari kami untuk mendorong generasi muda terlibat di dalam pengembangan organisasi PSS. 
                      Untuk mahasiswa dari berbagai jurusan dan kampus, jika berminat magang di PSS, silakan ajukan diri kalian. 
                      Program magang di PSS dibuka sepanjang tahun, namun kami akan memilih sesuai kebutuhan PSS.
                  </p>
              
                  <!-- Benefit Magang -->
                  <details class=" rounded-md shadow-inner p-3 mb-6">
                      <summary class="cursor-pointer text-white font-semibold text-lg">Benefit Magang</summary>
                      <ul class="mt-3 text-base text-white space-y-3">
                          <li>1. E-sertifikat magang</li>
                          <li>2. Uang saku bulanan</li>
                          <li>3. E-Book Self Development</li>
                          <li>4. Surat rekomendasi</li>
                          <li>5. Rekomendasi skill di LinkedIn</li>
                          <li>6. Pengalaman terlibat dalam organisasi sosial</li>
                          <li>7. Jejaring dengan organisasi sosial</li>
                      </ul>
                  </details>
              
                  <!-- Durasi Magang -->
                  <div class="mb-6">
                      <p class="px-4 py-4 text-xl font-bold text-blue-900 rounded-xl bg-zinc-300 max-md:pr-5">
                          Durasi magang 3 bulan
                      </p>
                  </div>
              
                  <!-- Tombol -->
                  <div class="flex justify-between items-center">
                      <!-- Tombol Kontak Person -->
                      <button href="#donasi" class="self-stretch px-4 sm:px-5 md:px-7 py-2 sm:py-3 md:py-4 my-auto border rounded-[50px] text-stone-50 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 transition-colors duration-300">
                          Contact Person
                      </button>
              
                      <!-- Tombol Daftar -->
                      <button href="#donasi" class="self-stretch px-4 sm:px-5 md:px-7 py-2 sm:py-3 md:py-4 my-auto bg-blue-500 rounded-[50px] text-stone-50 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-700 transition-colors duration-300">
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
</section>