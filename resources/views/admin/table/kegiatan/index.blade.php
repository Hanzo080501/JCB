@extends('layouts.dashboard')

@section('contents')
    <div class="flex flex-col flex-1 mx-2 md:flex-row lg:flex-row">
        <div class="w-full mb-2 border border-gray-300 border-solid rounded shadow-sm">
            <div class="flex justify-between px-2 py-3 bg-gray-200 border-b border-gray-200 border-solid">
                <span>{{ $title }}</span>
                <div class="flex items-center gap-3">
                    <form class="flex items-center max-w-sm" action="{{ route('kegiatan.index') }}" method="GET">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-4.35-4.35M16.75 10.75A6 6 0 1 0 4.25 10.75a6 6 0 0 0 12.5 0z" />
                                </svg>
                            </div>
                            <input type="text" id="search" name="search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-3xl focus:ring-blue-500 focus:border-blue-500 block w-full ps-9 p-2.5"
                                placeholder="Search..." />
                        </div>
                        <button type="submit"
                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-full ms-2 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-4.35-4.35M16.75 10.75A6 6 0 1 0 4.25 10.75a6 6 0 0 0 12.5 0z" />
                            </svg> Search
                        </button>
                    </form>

                    <a href="{{ route('kegiatan.create') }}">
                        <button class="px-4 py-2 font-bold text-white bg-green-500 rounded-full hover:bg-green-800">
                            Tambah Data
                            <i class="fas fa-plus"></i>
                        </button>
                    </a>
                </div>
            </div>
            <div class="p-3 overflow-x-auto">
                <table class="min-w-full bg-white border-collapse table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border border-b-2">NO</th>
                            <th class="px-4 py-2 border border-b-2">Image</th>
                            <th class="px-4 py-2 border border-b-2">Title</th>
                            <th class="px-4 py-2 border border-b-2">Deskripsi</th>
                            <th class="px-4 py-2 border border-b-2">Created At</th>
                            <th class="px-4 py-2 border border-b-2">Updated At</th>
                            <th class="px-4 py-2 border border-b-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($kegiatan as $data)
                            <tr>
                                <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 border">
                                    <img src="{{ asset('storage/kegiatan/' . $data->image) }}" alt="Image"
                                        class="object-cover w-16 h-16">
                                </td>
                                <td class="px-4 py-2 border">{{ $data->title }}</td>
                                <td class="px-4 py-2 border">
                                    <div class="max-w-xs truncate">{{ $data->deskripsi }}</div>
                                </td>
                                <td class="px-4 py-2 border">{{ $data->created_at->format('d-m-Y') }}</td>
                                <td class="px-4 py-2 border">{{ $data->updated_at->format('d-m-Y') }}</td>
                                <td class="px-4 py-2 border">
                                    <a href="{{ route('kegiatan.show', $data->id) }}"
                                        class="p-1 mx-1 text-white bg-teal-500 rounded hover:bg-teal-700">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('kegiatan.edit', $data->id) }}"
                                        class="p-1 mx-1 text-white bg-yellow-500 rounded hover:bg-yellow-700">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form id="delete-form-{{ $data->id }}"
                                        action="{{ route('kegiatan.destroy', $data->id) }}" method="POST"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" onclick="confirmDelete('{{ $data->id }}')"
                                            class="p-1 mx-1 text-white bg-red-500 rounded hover:bg-red-700">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="px-4 py-2 text-center border">No Data Available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="mt-4">
                    {{ $kegiatan->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
