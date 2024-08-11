@extends('layouts.dashboard')

@section('contents')
    <main class="flex-1 p-3 bg-gray-100">
        <div class="flex flex-col max-w-4xl mx-auto bg-white rounded-lg shadow-md">
            <form action="{{ route('topik.update', $topik->id) }}" method="POST" class="p-6">
                @csrf
                @method('PUT')
                <div class="flex flex-wrap mb-6 -mx-3">
                    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="title">
                            Title
                        </label>
                        <input
                            class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white @error('title') border-red-500 @enderror"
                            id="title" name="title" type="text" placeholder="Title" value="{{ $topik->title }}">
                        @error('title')
                            <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full px-3 md:w-1/2">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="deskripsi">
                            Publish By
                        </label>
                        <input
                            class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white @error('title') border-red-500 @enderror"
                            id="publish_by" name="publish_by" type="text" placeholder="Publish By"
                            value="{{ $topik->published_by }}">
                        @error('publish_by')
                            <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full px-3 md:w-1/2">
                        <label class="block mb-2 text-xs font-bold tracking-wide text-gray-700 uppercase" for="deskripsi">
                            Publish At
                        </label>
                        <input
                            class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border rounded appearance-none focus:outline-none focus:bg-white @error('publish_at') border-red-500 @enderror"
                            id="publish_at" name="publish_at" type="date" placeholder="Publish At"
                            value="{{ old('publish_at', $topik->published_at ? \Carbon\Carbon::parse($topik->published_at)->format('Y-m-d') : '') }}">

                        @error('publish_at')
                            <p class="text-xs italic text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex justify-end gap-2">
                    <a href="{{ route('topik.index') }}"
                        class="px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Kembali
                    </a>
                    <button type="submit"
                        class="px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </main>
@endsection
