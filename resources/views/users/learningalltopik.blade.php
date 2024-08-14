@extends('layouts.user')

@section('contents')
    <div class="container flex flex-col px-4 py-2 mx-auto md:flex-row md:px-16 md:py-4">
        <!-- Sidebar: Learning Topik -->
        @include('components.topikbar')

        <!-- Main Content -->
        <div class="flex flex-col w-full md:w-4/5">
            <!-- Middle Column: All Topik and Search -->
            <div class="flex flex-col items-center justify-between mb-5 md:flex-row">
                @if ($selectedTopikId)
                    <h3 class="text-[22px] font-semibold mb-4 md:mb-0">{{ $selectedTopikId->title }}</h3>
                @else
                    <h3 class="text-[22px] font-semibold mb-4 md:mb-0">Semua Topik</h3>
                @endif
                <form action="{{ route('learningalltopik', $selectedTopikId ? $selectedTopikId->id : '') }}" method="GET"
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
            <div class="flex flex-wrap -mx-2">
                @forelse ($peluang as $data)
                    <div class="w-full p-2 sm:w-1/2 md:w-1/3 lg:w-1/4">
                        <div class="bg-white border border-gray-200 rounded-lg shadow">
                            <a href="{{ route('detailcourse', $data->id) }}">
                                <img class="object-cover w-full h-48 rounded-t-lg"
                                    src="{{ asset('storage/peluang/images/' . $data->image) }}" alt="card image" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                        {{ substr($data->title, 0, 15) }}...
                                    </h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700">
                                    {{ substr($data->deskripsi, 0, 20) }}...
                                </p>
                                <a href="{{ route('detailcourse', $data->id) }}"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="w-full py-4 text-center">No data available</p>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-4">
                {{ $peluang->appends(request()->query())->links() }}
            </div>
        </div>
    </div>
@endsection
