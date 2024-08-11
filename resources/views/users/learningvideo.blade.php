@extends('layouts.user')

@section('contents')
    <div class="container px-4 py-6 mx-auto">
        <div class="flex justify-center my-16">
            <h1 class="text-3xl font-bold">Video belajar {{ $peluang->title }}</h1>
        </div>
        <div class="max-w-xl mx-auto overflow-hidden bg-white rounded-lg shadow-md">
            <video src="{{ asset('storage/peluang/videos/' . $peluang->video) }}" controls class="w-full h-auto"></video>
            <div class="p-4">
                <h3 class="text-xl font-bold text-gray-900">Video Title</h3>
                <p class="mt-2 text-gray-700">
                    {{ $peluang->deskripsi }}
                </p>
                <a href="{{ asset('storage/peluang/files/' . $peluang->file) }}" download
                    class="inline-block px-4 py-2 mt-4 text-white bg-blue-500 rounded hover:bg-blue-700">
                    Download Module PDF
                </a>
                <a href="{{ route('detailcourse', $peluang->id) }}"
                    class="inline-block px-4 py-2 mt-4 text-white bg-blue-500 rounded hover:bg-blue-700">
                    Back
                </a>
            </div>
        </div>
    </div>
@endsection
