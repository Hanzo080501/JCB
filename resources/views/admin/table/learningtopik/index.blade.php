@extends('layouts.dashboard')

@section('contents')
    <div class="flex flex-col flex-1 mx-2 md:flex-row lg:flex-row">
        <div class="w-full mb-2 border border-gray-300 border-solid rounded shadow-sm">
            <div class="flex justify-between px-2 py-3 bg-gray-200 border-b border-gray-200 border-solid">
                <span>Full Table</span>
                <a href="{{ route('topik.create') }}">
                    <button class="px-4 py-2 font-bold text-white bg-green-500 rounded-full hover:bg-green-800">
                        Tambah Data
                        <i class="ml-2 fas fa-plus"></i>
                    </button>
                </a>
            </div>
            <div class="p-3 overflow-x-auto">
                <table class="min-w-full bg-white border-collapse table-auto">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border border-b-2">NO</th>
                            <th class="px-4 py-2 border border-b-2">Title</th>
                            <th class="px-4 py-2 border border-b-2">Published At</th>
                            <th class="px-4 py-2 border border-b-2">Published By</th>
                            <th class="px-4 py-2 border border-b-2">Created At</th>
                            <th class="px-4 py-2 border border-b-2">Updated At</th>
                            <th class="px-4 py-2 border border-b-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($topik as $data)
                            <tr>
                                <td class="px-4 py-2 border">{{ $loop->iteration }}</td>
                                <td class="px-4 py-2 border">{{ $data->title }}</td>
                                <td class="px-4 py-2 border">
                                    {{ $data->published_at ? \Carbon\Carbon::parse($data->published_at)->format('d-m-y') : '' }}
                                </td>
                                <td class="px-4 py-2 border">{{ $data->published_by }}</td>
                                <td class="px-4 py-2 border">{{ $data->created_at->format('d-m-Y') }}</td>
                                <td class="px-4 py-2 border">{{ $data->updated_at->format('d-m-Y') }}</td>
                                <td class="px-4 py-2 border">
                                    <a href="{{ route('topik.show', $data->id) }}"
                                        class="p-1 mx-1 text-white bg-teal-500 rounded hover:bg-teal-700">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('topik.edit', $data->id) }}"
                                        class="p-1 mx-1 text-white bg-yellow-500 rounded hover:bg-yellow-700">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form id="delete-form-{{ $data->id }}"
                                        action="{{ route('topik.destroy', $data->id) }}" method="POST"
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
                    {{ $topik->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
