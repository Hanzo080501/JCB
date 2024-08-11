<x-guest-layout>
    <div class="container flex flex-col md:flex-row">
        <div class="w-full md:w-1/2 h-[20rem] md:h-[40rem] flex justify-center">
            <img src="{{ asset('/assets/img/sidebar.png') }}" alt="logo" class="object-cover w-full h-full">
        </div>
        <div class="flex justify-center w-full py-8 md:w-1/2 md:py-0">
            <form action="{{ route('register') }}" method="POST" class="w-full max-w-md px-4 md:px-0">
                <div class="flex items-center gap-5 mb-4 leading-9">
                    <h3 class="text-[24px] font-sans font-semibold">{{ __('Sign Up') }}</h3>
                    <h3 class="text-[24px] font-sans font-semibold">{{ __('Log In') }}</h3>
                </div>
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block w-full mt-1" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block w-full mt-1" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                        autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="block w-full mt-1" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                {{-- image --}}
                {{-- <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Images')" />
                    <input type="file" name="image" id="image" class="w-full mt-2" accept="image/*">
                </div> --}}

                <div class="flex flex-col w-full gap-4 mt-4">
                    <div class="flex cursor-pointer items-center justify-center w-full py-3 rounded-md bg-[#046AB8]">
                        <a class="font-sans font-semibold text-white" href="{{ route('login') }}">
                            {{ __('Don’t Have account? Sign in') }}
                        </a>
                    </div>
                    <div>
                        <x-primary-button
                            class="flex items-center justify-center w-full py-3 rounded-md outline outline-[#046AB8]">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
