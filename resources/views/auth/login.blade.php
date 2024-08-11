<x-guest-layout>
    <div class="container flex flex-col md:flex-row">
        <div class="w-full md:w-1/2 h-[20rem] md:h-[40rem] flex justify-center">
            <img src="{{ asset('/assets/img/sidebar.png') }}" alt="logo" class="object-cover w-full h-full">
        </div>
        <div class="flex justify-center w-full py-8 md:w-1/2 md:py-0">
            <form action="{{ route('login') }}" method="POST" class="w-full max-w-md px-4 md:px-0">
                <div class="flex items-center gap-5 mb-4 leading-9">
                    <h3 class="text-[24px] font-sans font-semibold">{{ __('Sign Up') }}</h3>
                    <h3 class="text-[24px] font-sans font-semibold">{{ __('Log In') }}</h3>
                </div>
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block w-full mt-1" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block w-full mt-1" type="password" name="password" required
                        autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex flex-col w-full gap-4 mt-4">
                    <div>
                        <div class="flex justify-between mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="text-indigo-600 border-gray-300 rounded shadow-sm focus:ring-indigo-500"
                                    name="remember">
                                <span class="text-sm text-gray-600 ms-2">{{ __('Remember me') }}</span>
                            </label>
                            <a href="{{ route('password.request') }}"
                                class="text-sm text-gray-600 ms-2 hover:text-blue-600 hover:duration-150">{{ __('Forgot your password?') }}</a>
                        </div>
                    </div>
                    <div>
                        <x-primary-button
                            class="flex items-center justify-center w-full py-3 rounded-md outline outline-[#046AB8]">
                            {{ __('Log In') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
