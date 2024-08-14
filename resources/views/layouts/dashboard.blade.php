<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? config('app.name') }}</title>
    {{-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> --}}

    {{-- Bootstrap@5.3.3 CSS Framework --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Google Icons @SymbolsOutlined --}}
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    {{-- Google Fonts @Anta --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/dist/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/dist/all.css') }}">
    <link rel="icon" href="{{ asset('/assets/img/logo.png') }}" type="image/x-icon">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Style --}}
    <style>
        * {
            font-family: 'Anta', sans-serif;
        }

        ::-webkit-scrollbar {
            display: none
        }

        body {
            height: 100vh
        }

        #profileToggle {
            transition: all 0.3s ease;
        }

        #profileToggle.hidden {
            opacity: 0;
            transform: translateY(-10px);
            pointer-events: none;
        }

        #profileToggle.show {
            opacity: 1;
            transform: translateY(0);
            pointer-events: auto;
        }
    </style>
    @yield('style')
</head>

<body>
    <div class="flex flex-col min-h-screen">
        <!--Header Section Starts Here-->
        <header class="bg-nav">
            <div class="flex justify-between">
                <div class="inline-flex items-center p-1 mx-3">
                    <i class="pr-2 text-white fas fa-bars" onclick="sidebarToggle()"></i>
                    <h1 class="p-2 text-white">Logo</h1>
                </div>
                <div class="relative flex flex-row items-center p-1">
                    <img onclick="profileToggle()" class="inline-block w-8 h-8 rounded-full cursor-pointer"
                        src="https://avatars0.githubusercontent.com/u/4323180?s=460&v=4" alt="">
                    <a href="#" onclick="profileToggle()"
                        class="hidden p-2 text-white no-underline cursor-pointer md:block lg:block">{{ Auth::user()->name }}</a>

                    <!-- Profile Dropdown -->
                    <div id="ProfileDropDown"
                        class="absolute z-50 hidden w-64 mt-48 bg-white rounded-lg shadow-lg right-1">
                        <div class="flex items-center justify-between p-4 border-b">
                            <h3 class="text-lg font-semibold">User Menu</h3>
                            <button onclick="profileToggle()" class="text-gray-500 hover:text-gray-700">&times;</button>
                        </div>
                        <ul class="py-2">
                            <li><a href="#" class="block px-4 py-2 text-black hover:bg-gray-100">My Account</a>
                            </li>
                            <li><a href="#" class="block px-4 py-2 text-black hover:bg-gray-100">Notifications</a>
                            </li>
                            <li>
                                <hr class="my-2 border-gray-300">
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="inline-block w-full">
                                    @csrf
                                    <button type="submit"
                                        class="block w-full px-4 py-2 text-left text-black hover:bg-gray-100">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <!--/Header-->
        <div class="flex flex-1">
            @include('components.sidebar')

            @yield('contents')

        </div>
        <!--Footer-->
        <footer class="p-2 text-white bg-grey-darkest">
            <div class="flex flex-1 mx-auto">&copy; My Design</div>
        </footer>
        <!--/footer-->

    </div {{-- jQuery@3.7.1 JS Libraries --}} <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="{{ asset('admin/src/main.js') }}"></script>


    {{-- Script for Mobile Sidebar --}}
    <script>
        $(document).ready(function() {
            $(".btn[data-toggle]").click(function() {
                let i = $(this).attr('data-toggle');
                let x = $(i);

                if (x.parents('.m-sidebar').hasClass('d-none')) {
                    x.parents('.m-sidebar').removeClass('d-none');
                } else {
                    x.parents('.m-sidebar').addClass('d-none');
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>
    <script>
        @if (session('success'))
            Swal.fire({
                title: 'Sukses!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'Ok',
                customClass: {
                    confirmButton: 'px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700',
                    popup: 'rounded-lg'
                }
            });
        @endif
    </script>

    @yield('scripts')
</body>

</html>
