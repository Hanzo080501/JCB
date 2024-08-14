@extends('layouts.user')

@section('contents')
    <div class="container px-4 py-6 mx-auto">
        <div class="flex justify-center my-16">
            <h1 class="text-3xl font-bold">Video belajar {{ $peluang->title }}</h1>
        </div>
        <div class="max-w-xl mx-auto overflow-hidden bg-white rounded-lg shadow-md">
            <iframe class="w-full h-full md:w-[580px] md:h-[315px]" src="https://www.youtube.com/embed/{{ $peluang->url }}"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
            <div class="p-4">
                <h3 class="text-xl font-bold text-gray-900">{{ $peluang->title }}</h3>
                <p class="mt-2 text-gray-700">
                    {{ $peluang->deskripsi }}
                    <br>
                    <a href="{{ url('https://www.youtube.com/watch?v=' . $peluang->url) }}" target="_blank"
                        class="text-blue-500 hover:underline">
                        Link YouTube
                    </a>

                </p>

                <!-- Download Button -->
                @if ($peluang->file)
                    <a href="{{ asset('storage/peluang/files/' . $peluang->file) }}" download
                        class="inline-block px-4 py-2 mt-4 text-white bg-blue-500 rounded hover:bg-blue-700">
                        Download Module PDF
                    </a>
                @endif
                <a href="{{ route('detailcourse', $peluang->id) }}"
                    class="inline-block px-4 py-2 mt-4 text-white bg-blue-500 rounded hover:bg-blue-700">
                    Back
                </a>
            </div>
        </div>

    </div>
@endsection
