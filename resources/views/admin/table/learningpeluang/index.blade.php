@extends('layouts.dashboard')

@section('contents')
    <div class="flex flex-col flex-1 mx-2 md:flex-row lg:flex-row">
        <div class="w-full mb-2 border border-gray-300 border-solid rounded shadow-sm">
            <div class="flex justify-between px-2 py-3 bg-gray-200 border-b border-gray-200 border-solid">
                <span>Table {{ $title }}</span>
                <a href="{{ route('peluang.create') }}">
                    <button class="px-4 py-2 font-bold text-white bg-green-500 rounded-full hover:bg-green-800">
                        Tambah Data
                        <i class="fas fa-plus"></i>
                    </button>
                </a>
            </div>
            <div class="p-3 overflow-x-auto">
                <table class="min-w-full bg-white border-collapse table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border border-b-2">NO</th>
                            <th class="px-4 py-2 border border-b-2">Image</th>
                            <th class="px-4 py-2 border border-b-2">Title</th>
                            <th class="px-4 py-2 border border-b-2">Deskripsi</th>
                            <th class="px-4 py-2 border border-b-2">isi</th>
                            <th class="px-4 py-2 border border-b-2">Materi</th>
                            <th class="px-4 py-2 border border-b-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($peluang as $data)
                            <tr>
                                <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 border">
                                    <img src="{{ asset('storage/peluang/images/' . $data->image) }}" alt="Image"
                                        class="object-cover w-16 h-16">
                                </td>
                                <td class="px-4 py-2 border">{{ $data->title }}</td>
                                <td class="px-4 py-2 border">
                                    <div class="max-w-xs truncate">{{ substr($data->deskripsi, 0, 20) }}...</div>
                                </td>

                                <td class="px-4 py-2 border">{{ $data->isi }}</td>
                                <td class="px-4 py-2 border">{{ substr($data->materi, 0, 8) }}...
                                </td>
                                <td class="px-4 py-2 border">
                                    <a href="{{ route('peluang.show', $data->id) }}"
                                        class="p-1 mx-1 text-white bg-teal-500 rounded hover:bg-teal-700">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('peluang.edit', $data->id) }}"
                                        class="p-1 mx-1 text-white bg-yellow-500 rounded hover:bg-yellow-700">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form id="delete-form-{{ $data->id }}"
                                        action="{{ route('peluang.destroy', $data->id) }}" method="POST"
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
                    {{ $peluang->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
