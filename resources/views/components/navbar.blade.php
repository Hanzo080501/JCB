<div class="container px-4 mx-auto">
    <div class="flex flex-row items-center justify-between h-[80px]">
        <div class="flex flex-row items-center">
            <img src="{{ asset('/assets/img/logo.png') }}" alt="logo" class="w-[74px] h-[81px]">
            <h3 class="text-[25px] font-extrabold">JOYMA+H</h3>
        </div>
        <div class="hidden md:flex">
            <ul class="flex flex-row items-center gap-8">
                <li class="font-sans font-semibold text-[20px]"><a href="{{ route('home') }}">Home</a></li>
                <li class="font-sans font-semibold text-[20px]"><a href="{{ route('about') }}">About</a></li>
                <li class="font-sans font-semibold text-[20px]"><a href="{{ route('learningalltopik') }}">Courses</a>
                </li>
                <li class="font-sans font-semibold text-[20px]"><a href="#footer">Contact</a></li>
                @guest
                    <li>
                        <button class="text-[#000000] outline outline-[#046AB8] px-5 py-2 rounded-3xl">
                            <a href="{{ route('login') }}">Log In</a>
                        </button>
                    </li>
                    <li>
                        <button class="text-white bg-[#046AB8] px-5 py-2 rounded-3xl">
                            <a href="{{ route('register') }}" class="text-white">Register</a>
                        </button>
                    </li>
                @else
                    <li class="relative">
                        <button id="menu-btn" class="flex items-center text-black">
                            <img src="{{ asset('/assets/img/user.svg') }}" alt="menu" class="w-[70px]">
                        </button>
                        <div id="dropdown-menu"
                            class="absolute right-0 hidden w-48 mt-2 bg-white border border-gray-200 rounded-md shadow-lg">
                            <a href="#"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100">{{ Auth::user()->name }}</a>
                            <a href="#"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100">{{ Auth::user()->email }}</a>
                            <a href="{{ route('profile.edit') }}"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="block px-4 py-2 text-gray-700 hover:bg-gray-100">
                                Log Out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
        <div class="md:hidden">
            <button id="menu-btn-mobile" class="text-black">
                <img src="{{ asset('/assets/img/user.svg') }}" alt="menu" class="w-[60px]">
            </button>
        </div>
    </div>
    <div id="mobile-menu" class="flex-col items-center hidden mt-4 md:hidden">
        <ul class="flex flex-col items-center gap-4">
            <li class="font-sans font-semibold text-[20px]"><a href="{{ route('home') }}">Home</a></li>
            <li class="font-sans font-semibold text-[20px]"><a href="{{ route('about') }}">About</a></li>
            <li class="font-sans font-semibold text-[20px]"><a href="{{ route('learningalltopik') }}">Courses</a></li>
            <li class="font-sans font-semibold text-[20px]"><a href="#footer">Contact</a></li>

            @guest
                <li>
                    <button class="text-[#000000] outline outline-[#046AB8] px-5 py-2 rounded-3xl">
                        <a href="{{ route('login') }}">Log In</a>
                    </button>
                </li>
                <li>
                    <button class="text-white bg-[#046AB8] px-5 py-2 rounded-3xl">
                        <a href="{{ route('register') }}" class="text-white">Register</a>
                    </button>
                </li>
            @else
                <li>
                    <button class="text-[#000000] outline outline-[#046AB8] px-5 py-2 rounded-3xl">
                        <a href="{{ route('profile.edit') }}">Profile</a>
                    </button>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST" class="inline-block">
                        @csrf
                        <button type="submit" class="text-white bg-[#046AB8] px-5 py-2 rounded-3xl">
                            Log Out
                        </button>
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</div>

<style>
    #dropdown-menu {
        z-index: 1000;
        /* Ensures dropdown is above other elements */
    }

    #mobile-menu {
        z-index: 1000;
        /* Ensures mobile menu is above other elements */
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const menuBtn = document.getElementById('menu-btn');
        const menuBtnMobile = document.getElementById('menu-btn-mobile');
        const mobileMenu = document.getElementById('mobile-menu');
        const dropdownMenu = document.getElementById('dropdown-menu');

        if (menuBtn && dropdownMenu) {
            menuBtn.addEventListener('click', () => {
                dropdownMenu.classList.toggle('hidden');
            });
        }

        if (menuBtnMobile && mobileMenu) {
            menuBtnMobile.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        window.addEventListener('click', (e) => {
            if (menuBtn && dropdownMenu && !menuBtn.contains(e.target) && !dropdownMenu.contains(e
                    .target)) {
                dropdownMenu.classList.add('hidden');
            }

            if (menuBtnMobile && mobileMenu && !menuBtnMobile.contains(e.target) && !mobileMenu
                .contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    });
</script>
