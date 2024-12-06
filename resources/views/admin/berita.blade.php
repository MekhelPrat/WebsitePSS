@extends('base.app')

@section('content')
    <div class="bg-white">
        <!-- Navigation Bar -->
        @include('includes.headerAdmin')



        <div class="container mx-auto px-4 py-8">
            <h2 class="text-3xl font-bold mb-5 text-center">Tambah Berita</h2>

            <!-- Form Penambahan Berita -->
            <div class="w-3/5 mx-auto bg-white p-8 rounded-lg shadow-lg">
                <form action="{{ route('admin.berita.post') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                            <ul class="list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Judul Berita -->
                    <div class="mb-4">
                        <label for="title" class="block text-lg font-semibold">Title</label>
                        <input type="text" id="title" name="title"
                            class="w-full p-2 border border-gray-300 rounded mt-2" value="{{ old('title') }}" required>
                        @error('title')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tanggal Berita -->
                    <div class="mb-4">
                        <label for="date" class="block text-lg font-semibold">Date</label>
                        <input type="date" id="date" name="date"
                            class="w-full p-2 border border-gray-300 rounded mt-2" value="{{ old('date') }}" required>
                        @error('date')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Isi Berita -->
                    <div class="mb-4">
                        <label for="description" class="block text-lg font-semibold">Description</label>
                        <textarea id="description" name="description" rows="5" class="w-full p-2 border border-gray-300 rounded mt-2" required>{{ old('description') }}</textarea>
                        @error('description')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Gambar -->
                    <div class="mb-4">
                        <label for="image" class="block text-lg font-semibold">Upload Image</label>
                        <input type="file" id="image" name="image"
                            class="w-full p-2 border border-gray-300 rounded mt-2">
                        @error('image')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Tombol Submit -->
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">
                        Add
                    </button>
                </form>
            </div>
        </div>



        <!-- Footer -->
        @include('includes.footer')
    </div>
@endsection
