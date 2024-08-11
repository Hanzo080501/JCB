@extends('layouts.dashboard')

@section('contents')
    <div class="flex flex-col flex-1 mx-2 md:flex-row lg:flex-row">
        <div class="w-full mb-2 border border-gray-300 border-solid rounded shadow-sm">
            <div class="px-4 py-3 bg-gray-200 border-b border-gray-200 border-solid">
                <h1 class="text-xl font-semibold">{{ $peluang->title }}</h1>
            </div>
            <div class="p-4">
                <div class="flex flex-col md:flex-row">
                    <div class="flex-shrink-0 w-full md:w-1/3">
                        <img src="{{ asset('storage/peluang/images/' . $peluang->image) }}" alt="{{ $peluang->title }}"
                            class="w-full h-auto rounded">
                    </div>
                    <div class="flex-grow w-full mt-4 md:mt-0 md:ml-6">
                        <div class="mb-4">
                            <h2 class="text-lg font-semibold">Title</h2>
                            <p class="w-[50%] mt-2 text-gray-700 break-words">{{ $peluang->title }}</p>
                        </div>
                        <div class="mb-4">
                            <h2 class="text-lg font-semibold">Deskripsi</h2>
                            <p class="w-[50%] mt-2 text-gray-700 break-words">{{ $peluang->deskripsi }}</p>
                        </div>
                        {{-- <div class="mb-4">
                            <h2 class="text-lg font-semibold">Topik</h2>
                            <p class="w-[50%] mt-2 text-gray-700 break-words">{{ $peluang->topik->title }}</p>
                        </div> --}}
                        <div class="mb-4">
                            <h2 class="text-lg font-semibold">Materi</h2>
                            <ol class="pl-5 list-decimal list-inside">
                                @forelse ($materi as $data)
                                    <li class="text-gray-700">{{ $data }}</li>
                                @empty
                                    <p>No data available</p>
                                @endforelse
                            </ol>
                        </div>
                        <div class="mb-4">
                            <h2 class="text-lg font-semibold">Tanggal Dibuat</h2>
                            <p class="mt-2 text-gray-700">{{ $peluang->created_at->format('d M Y, H:i') }}</p>
                        </div>
                        <div class="mb-4">
                            <h2 class="text-lg font-semibold">Terakhir Diperbarui</h2>
                            <p class="mt-2 text-gray-700">{{ $peluang->updated_at->format('d M Y, H:i') }}</p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('peluang.index') }}"
                                class="px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-800">
                                Kembali
                            </a>
                            <a href="{{ route('peluang.edit', $peluang->id) }}"
                                class="px-4 py-2 font-bold text-white bg-yellow-500 rounded-full hover:bg-yellow-700">
                                Edit
                            </a>
                            {{-- <form action="{{ route('peluang.destroy', $peluang->id) }}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="confirmDelete('{{ $peluang->id }}')"
                                    class="px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-800">
                                    Hapus
                                </button>
                            </form> --}}
                            <form id="delete-form-{{ $peluang->id }}"
                                action="{{ route('peluang.destroy', $peluang->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete('{{ $peluang->id }}')"
                                    class="px-4 py-2 font-bold text-white bg-red-500 rounded-full hover:bg-red-800">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
