@extends('layouts.user')

@section('contents')
    <div class="container flex flex-col px-4 py-2 mx-auto md:flex-row md:px-16 md:py-4">
        <!-- Sidebar: Learning Topik -->
        @include('components.topikbar')

        <!-- Main Content -->
        <div class="flex flex-col w-full md:w-4/5">
            <!-- Middle Column: All Topik and Search -->
            <div class="flex flex-col items-center justify-between mb-5 md:flex-row">
                <h3 class="text-[22px] font-semibold mb-4 md:mb-0">{{ $peluang->title }}</h3>
                <form action="{{ route('learningalltopik') }}" method="GET"
                    class="flex flex-col w-full gap-2 md:flex-row md:w-auto">
                    <input type="text" name="search" value="{{ request('search') }}"
                        class="w-full p-2 border border-gray-300 rounded-lg md:w-60 lg:w-72" placeholder="Search...">
                    <button type="submit"
                        class="px-4 py-2 text-white bg-blue-500 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        Search
                    </button>
                </form>
            </div>

            <!-- Card Section -->
            <div class="flex flex-wrap px-4 -mx-2 md:px-10">
                <div class="w-full">
                    <div class="w-full">
                        <div
                            class="flex flex-col items-center justify-evenly w-full p-4 bg-white border-gray-200 shadow md:p-6 md:flex-row md:w-full rounded-3xl">
                            <img src="{{ asset('/storage/peluang/images/' . $peluang->image) }}" alt="hero"
                                class="object-cover w-full h-64 md:h-auto md:w-[300px] rounded-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal text-center md:text-left">
                                <h4 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 md:text-xl">
                                    Konsep Dasar {{ $peluang->title }}
                                </h4>
                                <span class="text-gray-700 text-[18px] mb-3 md:text-[20px]">{{ $peluang->isi }}</span>
                            </div>
                            <div class="flex flex-col w-full gap-3 mt-4 md:w-auto md:flex-row md:gap-5 md:mt-0">
                                <form action="{{ route('learningvideo', $peluang->id) }}" method="GET"
                                    class="w-full md:w-auto">
                                    <button class="text-white w-full bg-[#046AB8] px-4 py-2 rounded-3xl md:w-auto">Belajar
                                        Sekarang</button>
                                </form>
                                <a href="{{ asset('storage/peluang/files/' . $peluang->file) }}" target="_blank">
                                    <button type="button"
                                        class="text-black w-full outline outline-[#046AB8] px-4 py-2 rounded-3xl md:w-auto">Lihat
                                        Modul</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap px-4 mt-5 -mx-2 md:px-10">
                <h1 class="text-[20px] md:text-[22px] font-semibold py-5">Detail Course {{ $peluang->title }}</h1>
                <div class="w-full">
                    <p class="leading-relaxed text-justify">
                        {{ $peluang->deskripsi }}
                    </p>
                    <p class="py-5">
                        Tujuan pembelajaran: pada akhir course ini siswa diharapkan mampu mengukur kemampuan:
                    </p>
                    <ol class="pl-5 list-decimal list-inside">
                        @forelse ($materi as $data)
                            <li>{{ $data }}</li>
                        @empty
                            <p>No data available</p>
                        @endforelse
                    </ol>
                </div>
            </div>

        </div>
    </div>
@endsection
