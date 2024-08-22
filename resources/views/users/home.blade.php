@extends('layouts.user')

@section('title')
    {{ $title }}
@endsection

@section('contents')
    <div class="container px-4 md:px-8 lg:px-[68px] mb-6">
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 w-full md:w-1/2 py-8 md:py-[150px] text-center md:text-left">
                <h3 class="py-3 mb-3 text-3xl font-bold md:text-5xl">
                    Belajar matematika<br>
                    bebas cemas bersama
                </h3>
                <span class="text-4xl font-bold md:text-6xl">
                    JOYMA+H
                </span>
                <p class="text-[16px] md:text-[20px] py-5">
                    Metode perilaku kognitif <br>
                    untuk belajar matematika yang efektif
                </p>
                <div>
                    <a href="{{ route('learningalltopik') }}">
                        <button class="text-white bg-[#046AB8] px-5 py-2 rounded-3xl">{{ __('Belajar Sekarang') }}</button>
                    </a>
                </div>
            </div>
            <div class="flex-1 w-full md:w-1/2">
                <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero" class="w-full h-auto">
            </div>
        </div>
    </div>

    <div class="container w-full px-4 md:px-8 bg-[#efefef]">
        <div class="flex flex-col py-6 md:flex-row">
            <div class="flex-1 w-full mb-6 text-center md:w-1/2 md:mb-0 md:text-left">
                <div class="w-full md:w-96 mx-auto md:mx-0 md:ms-[100px]">
                    <h1 class="text-[20px] font-bold mb-3">About JoyMath</h1>
                    <p>
                        Metode pembelajaran Joymath Cognitive Behavioral (CB)
                        merupakan inovasi yang mengintegrasikan konsep pembelajaran matematika dengan
                        prinsip-prinsip psikologi kognitif dan perilaku. Pendesainan metode ini diharapkan dapat
                        menciptakan
                        pengalaman belajar yang lebih menyenangkan dan efektif, sehingga meningkatkan pemahaman dan
                        minat
                        siswa terhadap matematika.
                    </p>
                </div>
            </div>
            <div class="flex-1 w-full md:w-1/2 overflow-hidden mr-0 md:mr-[47px]">
                <div class="flex justify-end gap-5 mb-4 carousel-container">
                    <a id="prev" class="material-icons text-[50px] text-[#046AB8]">arrow_circle_left</a>
                    <a id="next" class="material-icons text-[50px] text-[#046AB8]">arrow_circle_right</a>
                </div>
                <div class="carousel">
                    <!-- Repeat this block for each card (16 times) -->
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <!-- Repeat the block 16 times with different content if needed -->
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#"
                            class="flex flex-col items-center p-6 bg-white border-gray-200 shadow md:flex-row md:max-w-xl rounded-3xl">
                            <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero"
                                class="object-cover w-full h-96 rounded-3xl md:h-auto md:w-48 md:rounded-none md:rounded-l-3xl">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h4 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Ketua</h4>
                                <span class="text-gray-700 text-[20px]">Nafida Dwi Saputri M.,Pd</span>
                                <p>Dosen Matematika UMBY</p>
                            </div>
                        </a>
                    </div>
                    <!-- Repeat for all 16 items -->
                </div>
            </div>
        </div>
    </div>

    <div class="container flex flex-col items-center justify-center px-6 md:px-16 py-9">
        <div class="px-5 mt-24">
            <h2 class="text-3xl font-bold text-center md:text-left">Kenapa harus JOYMA+H?</h2>
        </div>
        <div class="grid grid-cols-1 gap-10 px-5 my-16 md:grid-cols-3 md:my-32 md:px-9">
            <div class="flex flex-col items-center justify-center px-5 text-center">
                <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero" class="h-[120px] w-[120px]">
                <h2 class="my-6 text-2xl font-bold">Kelebihan 1</h2>
                <p class="w-56">
                    Students practice at their own pace, first filling in gaps in their understanding and then
                    accelerating their learning.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center px-5 text-center">
                <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero" class="h-[120px] w-[120px]">
                <h2 class="my-6 text-2xl font-bold">Kelebihan 2</h2>
                <p class="w-56">
                    Students practice at their own pace, first filling in gaps in their understanding and then
                    accelerating their learning.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center px-5 text-center">
                <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero" class="h-[120px] w-[120px]">
                <h2 class="my-6 text-2xl font-bold">Kelebihan 3</h2>
                <p class="w-56">
                    Students practice at their own pace, first filling in gaps in their understanding and then
                    accelerating their learning.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center px-5 text-center">
                <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero" class="h-[120px] w-[120px]">
                <h2 class="my-6 text-2xl font-bold">Kelebihan 4</h2>
                <p class="w-56">
                    Students practice at their own pace, first filling in gaps in their understanding and then
                    accelerating their learning.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center px-5 text-center">
                <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero" class="h-[120px] w-[120px]">
                <h2 class="my-6 text-2xl font-bold">Kelebihan 5</h2>
                <p class="w-56">
                    Students practice at their own pace, first filling in gaps in their understanding and then
                    accelerating their learning.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center px-5 text-center">
                <img src="{{ asset('/assets/img/landing page.png') }}" alt="hero" class="h-[120px] w-[120px]">
                <h2 class="my-6 text-2xl font-bold">Kelebihan 6</h2>
                <p class="w-56">
                    Students practice at their own pace, first filling in gaps in their understanding and then
                    accelerating their learning.
                </p>
            </div>
        </div>

        <div class="px-5 mt-24">
            <h1 class="text-3xl font-bold text-center md:text-left">Kegiatan JoyMath Cognitive Behavioral</h1>
        </div>

        <div class="w-full px-5 my-16 swiper-container md:w-[80%] md:my-32 md:px-9">
            <div class="w-full overflow-hidden swiper-wrapper">
                <div class="mx-auto carousel">
                    @forelse ($kegiatan as $data)
                        <div
                            class="swiper-slide max-w-[300px] h-auto carousel-item bg-[#D9D9D9] border border-gray-200 rounded-lg shadow dark:bg-[#D9D9D9] dark:border-gray-700 overflow-hidden">
                            <a href="#" class="w-full overflow-hidden">
                                <img class="duration-150 rounded-t-lg hover:scale-125 hover:duration-500"
                                    src="{{ asset('storage/kegiatan/' . $data->image) }}" alt="card image" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $data->title }}
                                    </h5>
                                </a>
                                <p id="shortDescription-{{ $loop->index }}"
                                    class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-3">
                                    {{ Str::limit($data->deskripsi, 10) }}
                                </p>
                                <p id="fullDescription-{{ $loop->index }}"
                                    class="hidden mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    {{ $data->deskripsi }}
                                </p>
                                <button id="readMoreBtn-{{ $loop->index }}"
                                    class="read-more-btn inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    @empty
                        <p>No data available</p>
                    @endforelse
                </div>
            </div>
        </div>


        <div class="py-10">
            <h2 class="text-3xl font-bold text-center">Suported By</h2>
        </div>
        <div class="flex flex-wrap justify-center gap-6 my-6">
            <div class="w-[150px] h-[100px] border-2 rounded-md border-gray-800 px-5 py-5">
                <img src="{{ asset('/assets/img/TutWuri 1.png') }}" alt="card image"
                    class="object-contain w-full h-full" />
            </div>
            <div class="w-[150px] h-[100px] border-2 rounded-md border-gray-800 px-5 py-5">
                <img src="{{ asset('/assets/img/KampusMerdeka_transparent 1.png') }}" alt="card image"
                    class="object-contain w-full h-full" />
            </div>
            <div class="w-[150px] h-[100px] border-2 rounded-md border-gray-800 px-5 py-5">
                <img src="{{ asset('/assets/img/KedaiReka_transparent 1.png') }}" alt="card image"
                    class="object-contain w-full h-full" />
            </div>
            <div class="w-[150px] h-[100px] border-2 rounded-md border-gray-800 px-5 py-5">
                <img src="{{ asset('/assets/img/Logo-Universitas-Mercu-Buana-Yogyakarta-Dianisa.com_ (1) 1.png') }}"
                    alt="card image" class="object-contain w-full h-full" />
            </div>
            <div class="w-[150px] h-[100px] border-2 rounded-md border-gray-800 px-5 py-5">
                <img src="{{ asset('/assets/img/ASA-removebg-preview 1.png') }}" alt="card image"
                    class="object-contain w-full h-full" />
            </div>
        </div>
    </div>
@endsection



{{-- <footer class="py-16 text-sm text-center text-black dark:text-white/70">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer> --}}
@section('script')
    <script>
        const carousel = document.querySelector('.carousel');
        const carouselItems = document.querySelectorAll('.carousel-item');
        const prevButton = document.getElementById('prev');
        const nextButton = document.getElementById('next');

        let itemwidth = carouselItems[0].getBoundingClientRect().width + 11;


        prevButton.addEventListener('click', () => {
            carousel.scrollBy({
                left: -itemwidth,
                behavior: 'smooth'
            });
        });

        nextButton.addEventListener('click', () => {
            carousel.scrollBy({
                left: itemwidth,
                behavior: 'smooth'
            });
        });

        window.addEventListener('resize', () => {
            itemwidth = carouselItems[0].getBoundingClientRect().width + 11;
        })
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const readMoreButtons = document.querySelectorAll('.read-more-btn');

            readMoreButtons.forEach((btn, index) => {
                btn.addEventListener('click', function() {
                    const shortDescription = document.getElementById(`shortDescription-${index}`);
                    const fullDescription = document.getElementById(`fullDescription-${index}`);

                    if (fullDescription.classList.contains('hidden')) {
                        // Tampilkan deskripsi lengkap
                        fullDescription.classList.remove('hidden');
                        shortDescription.classList.add('hidden');
                        btn.innerHTML = `Read less
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>`;
                    } else {
                        // Kembali ke deskripsi pendek
                        fullDescription.classList.add('hidden');
                        shortDescription.classList.remove('hidden');
                        btn.innerHTML = `Read more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>`;
                    }
                });
            });
        });
    </script>
@endsection
