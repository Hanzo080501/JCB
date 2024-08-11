@extends('layouts.user')

@section('contents')
    <div class="container px-4 py-6 mx-auto">
        <div class="flex flex-col items-center justify-center mx-auto mb-24 space-y-4 text-center my-11">
            <h1 class="text-2xl font-bold sm:text-3xl md:text-4xl lg:text-5xl">
                JOYMATH COGNITIVE BEHAVIORAL
            </h1>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl">
                Inovasi pembelajaran matematika untuk menciptakan <br>
                lingkungan belajar yang nyaman
            </p>
        </div>

        <div class="flex justify-center h-[50vh] mx-auto">
            <img src="{{ asset('/assets/img/landing page.png') }}" alt="" class="w-auto">
        </div>
        <div class="max-w-xl mx-auto overflow-hidden bg-white rounded-lg shadow-md">
            <div class="p-4">
                <h3 class="text-xl font-bold text-gray-900">About</h3>
                <p class="mt-2 text-gray-700">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac odio hendrerit, blandit lacus nec,
                    efficitur velit. Sed ac sapien erat. Phasellus hendrerit purus ut purus pharetra, non efficitur ex
                    pulvinar. Integer venenatis tortor a metus egestas, ut faucibus nulla tempor. Sed sit amet diam libero.
                    Ut lacinia dui ut fermentum egestas. Donec pharetra, tortor in fermentum tincidunt, urna elit laoreet
                    odio, ac faucibus leo neque eu nunc. Nullam non purus vel erat lacinia fermentum. Vestibulum id pharetra
                    erat. Curabitur a velit quis tortor dictum dignissim. Cras ultricies fermentum tellus, et sodales orci
                    commodo a. Curabitur vel ligula risus.

                </p>
            </div>
        </div>
    </div>
@endsection
