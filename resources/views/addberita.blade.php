@extends('base.app')

@section('content')
<div class="bg-black">
    <!-- Navigation Bar -->
    @include('includes.header')



    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold mb-5 text-center">Tambah Berita</h2>
    
        <!-- Form Penambahan Berita -->
        <div class="w-3/5 mx-auto bg-white p-8 rounded-lg shadow-lg">
            <form action="{{ url('/tambah-berita') }}" method="POST" enctype="multipart/form-data">
                @csrf
    
                <!-- Judul Berita -->
                <div class="mb-4">
                    <label for="judul" class="block text-lg font-semibold">Judul Berita</label>
                    <input type="text" id="judul" name="judul" class="w-full p-2 border border-gray-300 rounded mt-2" value="{{ old('judul') }}" required>
                    @error('judul')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
    
                <!-- Tanggal Berita -->
                <div class="mb-4">
                    <label for="tanggal" class="block text-lg font-semibold">Tanggal Berita</label>
                    <input type="date" id="tanggal" name="tanggal" class="w-full p-2 border border-gray-300 rounded mt-2" value="{{ old('tanggal') }}" required>
                    @error('tanggal')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
    
                <!-- Isi Berita -->
                <div class="mb-4">
                    <label for="isi" class="block text-lg font-semibold">Isi Berita</label>
                    <textarea id="isi" name="isi" rows="5" class="w-full p-2 border border-gray-300 rounded mt-2" required>{{ old('isi') }}</textarea>
                    @error('isi')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
    
                <!-- Gambar -->
                <div class="mb-4">
                    <label for="gambar" class="block text-lg font-semibold">Gambar Berita (opsional)</label>
                    <input type="file" id="gambar" name="gambar" class="w-full p-2 border border-gray-300 rounded mt-2">
                    @error('gambar')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
    
                <!-- Tombol Submit -->
                <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">
                    Simpan Berita
                </button>
            </form>
        </div>
    </div>
    
    

    <!-- Footer -->
    @include('includes.footer')
</div>
@endsection