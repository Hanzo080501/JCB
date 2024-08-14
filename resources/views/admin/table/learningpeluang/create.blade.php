@extends('layouts.dashboard')

@section('contents')
    <main class="flex-1 p-3 bg-gray-100">
        <div class="flex flex-col max-w-4xl mx-auto bg-white rounded-lg shadow-md">
            <form action="{{ route('peluang.store') }}" method="POST" enctype="multipart/form-data" class="p-6">
                @csrf
                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3 mb-6 md:w-1/2">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="title">
                            Title
                        </label>
                        <input
                            class="block w-full px-4 py-3 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white @error('title') border-red-500 @enderror"
                            id="title" name="title" type="text" placeholder="Title" value="{{ old('title') }}">
                        @error('title')
                            <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full px-3 mb-6 md:w-1/2">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="deskripsi">
                            Deskripsi
                        </label>
                        <textarea
                            class="block w-full px-4 py-3 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white @error('deskripsi') border-red-500 @enderror"
                            id="deskripsi" name="deskripsi" placeholder="Deskripsi">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3 mb-6 md:w-1/2">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="isi">
                            Isi
                        </label>
                        <input
                            class="block w-full px-4 py-3 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white @error('isi') border-red-500 @enderror"
                            id="isi" name="isi" type="text" placeholder="Isi" value="{{ old('isi') }}">
                        @error('isi')
                            <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full px-3 mb-6 md:w-1/2">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="materi">
                            Materi
                        </label>
                        <textarea
                            class="block w-full px-4 py-3 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white @error('materi') border-red-500 @enderror"
                            id="materi" name="materi" rows="5" placeholder="Masukkan materi, pisahkan dengan newline atau enter">{{ old('materi') }}</textarea>
                        @error('materi')
                            <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full px-3 mb-6 md:w-1/2">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="topik_id">
                            Pilih Topik
                        </label>
                        <select name="topik_id" id="topik_id"
                            class="block w-full px-4 py-3 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white">
                            <option value="">-- Pilih Topik --</option>
                            @foreach ($topik as $item)
                                <option value="{{ $item->id }}" {{ old('topik_id') == $item->id ? 'selected' : '' }}>
                                    {{ $item->title }}
                                </option>
                            @endforeach
                        </select>
                        @error('topik_id')
                            <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full px-3 mb-6 md:w-1/2">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="file">
                            File Modul
                        </label>
                        <input
                            class="block w-full px-4 py-3 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white @error('file') border-red-500 @enderror"
                            id="file" name="file" type="file"
                            accept=".pdf,.doc,.docx,.ppt,.pptx,.txt,.rtf,.odt,.xls,.xlsx">
                        @error('file')
                            <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3 mb-6 md:w-1/2">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="image">
                            Thumbnail
                        </label>
                        <input
                            class="block w-full px-4 py-3 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white @error('image') border-red-500 @enderror"
                            id="image" name="image" type="file" onchange="previewImage(event)" accept="image/*">
                        @error('image')
                            <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full px-3 mb-6 md:w-1/2">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase">
                            Image Preview
                        </label>
                        <div id="imagePreview" class="flex items-center justify-center h-40 bg-gray-200 border rounded">
                            <!-- Placeholder for image preview -->
                        </div>
                    </div>
                </div>
                <div class="w-full px-3 mb-6 md:w-1/2">
                    <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="url">
                        Url Video
                    </label>
                    <input
                        class="block w-full px-4 py-3 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white @error('url') border-red-500 @enderror"
                        id="url" name="url" type="text" placeholder="url video" value="{{ old('url') }}">
                    @error('url')
                        <p class="text-xs italic text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-end gap-2 p-6">
                    <a href="{{ route('peluang.index') }}"
                        class="px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-800">Back</a>
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
            const file = event.target.files[0];
            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function() {
                    const output = document.getElementById('imagePreview');
                    output.innerHTML = '<img src="' + reader.result +
                        '" class="object-cover w-full h-full" alt="Image Preview">';
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
