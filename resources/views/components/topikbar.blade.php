<div class="w-full h-screen p-4 mb-4 bg-gray-100 md:w-1/5 md:mb-0 md:mr-8">
    <h3 class="text-[22px] mb-5 font-semibold">Learning Topik</h3>
    <hr class="border-[#046AB8] mb-5">
    <ul class="space-y-4">
        @forelse ($topik as $data)
            <a class="w-full line-clamp-5" href="{{ route('learningalltopik', $data->id) }}">
                <li><button class="w-full text-left">{{ $data->title }}</button></li>
            </a>
        @empty
            <li class="text-center">Tidak ada topik</li>
        @endforelse
    </ul>
</div>
