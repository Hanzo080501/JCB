@extends('layouts.dashboard')

@section('contents')
    <main class="flex-1 p-3 bg-gray-100">
        <div class="flex flex-col max-w-4xl mx-auto bg-white rounded-lg shadow-md">
            <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data"
                class="p-6">
                @csrf
                @method('PUT')

                <div class="flex flex-wrap mb-6 -mx-3">
                    <!-- Title Input -->
                    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="title">
                            Title
                        </label>
                        <input
                            class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white @error('title') border-red-500 @enderror"
                            id="title" name="title" type="text" placeholder="Title"
                            value="{{ old('title', $kegiatan->title) }}">
                        @error('title')
                            <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <!-- Deskripsi Input -->
                    <div class="w-full px-3 md:w-1/2">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="deskripsi">
                            Deskripsi
                        </label>
                        <textarea
                            class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white @error('deskripsi') border-red-500 @enderror"
                            id="deskripsi" name="deskripsi" placeholder="Deskripsi">{{ old('deskripsi', $kegiatan->deskripsi) }}</textarea>
                        @error('deskripsi')
                            <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-wrap mb-6 -mx-3">
                    <!-- Image Input -->
                    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="image">
                            Image
                        </label>
                        <input
                            class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white @error('image') border-red-500 @enderror"
                            id="image" name="image" type="file" onchange="previewImage(event)">
                        @error('image')
                            <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Image Preview -->
                    <div class="w-full px-3 mb-6 md:w-1/2">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">
                            Image Preview
                        </label>
                        <div id="imagePreview" class="flex items-center justify-center h-40 bg-gray-200 border rounded">
                            @if ($kegiatan->image)
                                <img src="{{ asset('storage/kegiatan/' . $kegiatan->image) }}"
                                    class="object-cover w-full h-full" alt="{{ $kegiatan->title }}">
                            @else
                                <img src="{{ asset('storage/Default/brand.png') }}" class="object-cover w-full h-full"
                                    alt="Default Image">
                            @endif
                        </div>
                    </div>
                </div>

                <div class="flex justify-end gap-2">
                    <a href="{{ route('kegiatan.index') }}"
                        class="px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Kembali
                    </a>
                    <button type="submit"
                        class="px-4 py-2 font-bold text-white bg-green-500 rounded-full hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('imagePreview');
                output.innerHTML = '<img src="' + reader.result +
                    '" class="object-cover w-full h-full" alt="Image Preview">';
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
