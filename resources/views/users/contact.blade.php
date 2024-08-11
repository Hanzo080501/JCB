@extends('layouts.user')

@section('contents')
    <div class="container flex flex-col md:flex-row">
        <div class="w-full md:w-1/2 h-[20rem] md:h-[40rem] flex justify-center">
            <img src="{{ asset('/assets/img/sidebar.png') }}" alt="logo" class="object-cover w-full h-full">
        </div>
        <div class="flex justify-center w-full py-8 md:w-1/2 md:py-0">
            <form action="{{ route('login') }}" method="POST" class="w-full max-w-md px-4 md:px-0">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="nama" :value="__('Nama')" />
                    <x-text-input id="nama" class="block w-full mt-1" type="text" name="nama" :value="old('nama')"
                        required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block w-full mt-1" type="email" name="email" required
                        autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <textarea name="message" id="" cols="30" rows="10" class="w-full mt-4 rounded-md"></textarea>

                <div class="flex flex-col w-full gap-4 mt-4">
                    <div>
                    </div>
                    <div>
                        <x-primary-button
                            class="flex items-center justify-center w-full py-3 rounded-md outline outline-[#046AB8]">
                            {{ __('Send Message') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
