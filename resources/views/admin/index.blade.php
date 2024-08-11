@extends('layouts.dashboard')

@section('contents')
    <!--Main-->
    <main class="flex-1 p-3 overflow-hidden bg-white-300">

        <div class="flex flex-col">
            <!-- Stats Row Starts Here -->
            <div class="flex flex-col flex-1 mx-2 md:flex-row lg:flex-row">
                <div
                    class="p-2 mx-2 mb-2 border-l-8 shadow-lg bg-red-vibrant hover:bg-red-vibrant-dark border-red-vibrant-dark md:w-1/4">
                    <div class="flex flex-col p-4">
                        <a href="#" class="text-2xl text-white no-underline">
                            $244
                        </a>
                        <a href="#" class="text-lg text-white no-underline">
                            Total Sales
                        </a>
                    </div>
                </div>

                <div class="p-2 mx-2 mb-2 border-l-8 shadow bg-info hover:bg-info-dark border-info-dark md:w-1/4">
                    <div class="flex flex-col p-4">
                        <a href="#" class="text-2xl text-white no-underline">
                            $199.4
                        </a>
                        <a href="#" class="text-lg text-white no-underline">
                            Total Cost
                        </a>
                    </div>
                </div>

                <div class="p-2 mx-2 mb-2 border-l-8 shadow bg-warning hover:bg-warning-dark border-warning-dark md:w-1/4">
                    <div class="flex flex-col p-4">
                        <a href="#" class="text-2xl text-white no-underline">
                            900
                        </a>
                        <a href="#" class="text-lg text-white no-underline">
                            Total Users
                        </a>
                    </div>
                </div>

                <div class="p-2 mx-2 mb-2 border-l-8 shadow bg-success hover:bg-success-dark border-success-dark md:w-1/4">
                    <div class="flex flex-col p-4">
                        <a href="#" class="text-2xl text-white no-underline">
                            500
                        </a>
                        <a href="#" class="text-lg text-white no-underline">
                            Total Products
                        </a>
                    </div>
                </div>
            </div>

            <!-- /Stats Row Ends Here -->

            <!-- Card Sextion Starts Here -->
            <div class="flex flex-col flex-1 mx-2 md:flex-row lg:flex-row">

                <!-- card -->

                <div class="w-full mx-2 overflow-hidden bg-white rounded shadow">
                    <div class="px-6 py-2 border-b border-light-grey">
                        <div class="text-xl font-bold">Trending Categories</div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-grey-darkest">
                            <thead class="text-white bg-grey-dark text-normal">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Item</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Current</th>
                                    <th scope="col">Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <button
                                            class="px-2 py-1 font-light text-white bg-blue-500 rounded-full hover:bg-blue-800">
                                            Twitter
                                        </button>
                                    </td>
                                    <td>4500</td>
                                    <td>4600</td>
                                    <td>
                                        <span class="text-green-500"><i class="fas fa-arrow-up"></i>5%</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>
                                        <button
                                            class="px-2 py-1 font-light text-white rounded-full bg-primary hover:bg-primary-dark">
                                            Facebook
                                        </button>
                                    </td>
                                    <td>10000</td>
                                    <td>3000</td>
                                    <td>
                                        <span class="text-red-500"><i class="fas fa-arrow-down"></i>65%</span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">3</th>
                                    <td>
                                        <button
                                            class="px-2 py-1 font-light text-white rounded-full bg-success hover:bg-success-dark">
                                            Amazon
                                        </button>
                                    </td>
                                    <td>10000</td>
                                    <td>3000</td>
                                    <td>
                                        <span class="text-red-500"><i class="fas fa-arrow-down"></i>65%</span>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">4</th>
                                    <td>
                                        <button
                                            class="px-2 py-1 font-light text-white bg-blue-500 rounded-full hover:bg-blue-800">
                                            Microsoft
                                        </button>
                                    </td>
                                    <td>10000</td>
                                    <td>3000</td>
                                    <td>
                                        <span class="text-green-500"><i class="fas fa-arrow-up"></i>65%</span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /card -->

            </div>
            <!-- /Cards Section Ends Here -->

            <!-- Progress Bar -->
            {{-- <div class="flex flex-col flex-1 mx-2 mt-2 md:flex-row lg:flex-row">
                <div class="w-full pt-2 mx-2 overflow-hidden bg-white rounded shadow">
                    <div class="px-6 py-2 border-b border-light-grey">
                        <div class="text-xl font-bold">Progress Among Projects</div>
                    </div>
                    <div class="">
                        <div class="w-full">

                            <div class="w-full shadow bg-grey-light">
                                <div class="py-1 text-xs leading-none text-center text-white bg-blue-500"
                                    style="width: 45%">45%
                                </div>
                            </div>


                            <div class="w-full mt-2 shadow bg-grey-light">
                                <div class="py-1 text-xs leading-none text-center text-white bg-teal-500"
                                    style="width: 55%">55%
                                </div>
                            </div>


                            <div class="w-full mt-2 shadow bg-grey-light">
                                <div class="py-1 text-xs leading-none text-center text-white bg-orange-500"
                                    style="width: 65%">65%
                                </div>
                            </div>


                            <div class="w-full mt-2 shadow bg-grey-300">
                                <div class="py-1 text-xs leading-none text-center text-white bg-red-800" style="width: 75%">
                                    75%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- /Progress Bar -->
        </div>
    </main>
    <!--/Main-->
@endsection
