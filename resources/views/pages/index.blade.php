@extends('layouts.default')

@section('content')

    {{-- Hero Section 1 --}}
    <div class="flex flex-col justify-center items-center w-full whitespace-pre-line mt-10">
        <p class="text-3xl font-bold text-gray-800">Solutions for every rental company</p>
        <p class="text-gray-500">The only rental software you need, whatever your industry</p>
        <div class="flex flex-row mt-5">
            <div class="flex flex-col justify-center items-center px-7">
                <i class="fa-solid fa-car-side text-3xl"></i>
                <h5 class="text-xl font-bold text-gray-800">Car Rental</h5>
            </div>
            <div class="flex flex-col justify-center items-center px-7">
                <i class="fa-solid fa-ship text-3xl"></i>
                <h5 class="text-xl font-bold text-gray-800">Boat Rental</h5>
            </div>
            <div class="flex flex-col justify-center items-center px-7">
                <i class="fa-solid fa-caravan text-3xl"></i>
                <h5 class="text-xl font-bold text-gray-800">RV Rental</h5>
            </div>
            <div class="flex flex-col justify-center items-center px-7">
                <i class="fa-solid fa-truck text-3xl"></i>
                <h5 class="text-xl font-bold text-gray-800">Construction Rental</h5>
            </div>
        </div>
    </div>



    <div class="flex flex-col justify-center items-center whitespace-pre-line mt-10">
        <p class="text-3xl font-bold text-gray-800">Our Customers</p>
        <p class="text-gray-500 text-center">At CarRent we’ve designed a platform that fits into rental organisations of all shapes and sizes and offers solutions to many industry segments from car and boat rental to car sharing.</p>
    </div>

    {{-- Testimonial Section --}}
    <div class="relative mb-10">
        <div class="relative bg-white">
            <div class="relative">
                <div class="relative h-full">
                    <div class="h-full flex">
                        <div class="w-full flex-1">
                            <div class="w-full h-full p-4 flex flex-wrap">
                                <!-- Card 1 -->
                                <div class="w-full lg:w-1/3 px-4 my-4">
                                    <div class="relative rounded-md shadow-md bg-white p-4 h-full flex flex-col justify-between">
                                        <div class="inline-flex items-center">
                                            <div class="relative inline-block h-12 w-12 rounded-full overflow-hidden">
                                                <img class="h-full w-full object-cover" src="https://avatars.dicebear.com/api/adventurer-neutral/your-custom-seed.svg" alt="Your Avatar">
                                            </div>
                                            <h5 class="text-xl px-1 font-bold text-gray-800">Jim Bean Rentals</h5>
                                        </div>
                                        <div class="inline-flex items-center pt-2">
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                        </div>
                                        <p class="mt-1 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit tellus a ipsum viverra, id placerat magna pellentesque. Mauris dapibus, tellus at  , lacus diam erat volutpat.</p>
                                    </div>
                                </div>
                                <!-- Card 2 -->
                                <div class="w-full lg:w-1/3 px-4 my-4">
                                    <div class="relative rounded-md shadow-md bg-white p-4 h-full flex flex-col justify-between">
                                        <div class="inline-flex items-center">
                                            <div class="relative inline-block h-12 w-12 rounded-full overflow-hidden">
                                                <img class="h-full w-full object-cover" src="https://avatars.dicebear.com/api/adventurer-neutral/your-custom-seed.svg" alt="Your Avatar">
                                            </div>
                                            <h5 class="text-xl px-1 font-bold text-gray-800">Jack Daniels Rentals</h5>
                                        </div>
                                        <div class="inline-flex items-center pt-2">
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                        </div>
                                        <p class="mt-1 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit tellus a ipsum viverra, id placeratdictum rutrum bibendum tortor id tellus cursus ultricies. Aliquam erat volutpat.</p>
                                    </div>
                                </div>
                                <!-- Card 3 -->
                                <div class="w-full lg:w-1/3 px-4 my-4">
                                    <div class="relative rounded-md shadow-md bg-white p-4 h-full flex flex-col justify-between">
                                        <div class="inline-flex items-center">
                                            <div class="relative inline-block h-12 w-12 rounded-full overflow-hidden">
                                                <img class="h-full w-full object-cover" src="https://avatars.dicebear.com/api/adventurer-neutral/your-custom-seed.svg" alt="Your Avatar">
                                            </div>
                                            <h5 class="text-xl px-1 font-bold text-gray-800">Jameson Rentals</h5>
                                        </div>
                                        <div class="inline-flex items-center pt-2">
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                            <i class="fa-solid fa-star text-yellow-500"></i>
                                        </div>
                                        <p class="mt-1 text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit tellus a ipsum viverra, id placerat magna pellentesque. Mauris dapibus, tauris vel aliquebendum tortor id tellvolutpat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Acheivements Section  --}}
    <div class="flex flex-col justify-center items-center w-full whitespace-pre-line">
        <p class="text-3xl font-bold text-gray-800">Our Achievements</p>
        <p class="text-gray-500">We’re proud to have been named an award-winning rental platform many times. Below are just some of our current awards.</p>
        <div class="flex flex-row mt-5 mb-10">
            <div class="flex flex-col justify-center items-center px-2">
                <i class="fas fa-trophy text-yellow-500 text-3xl"></i>
                <p class="text-sm text-gray-500">Best Rental Software 2021</p>
            </div>
            <div class="flex flex-col justify-center items-center px-2">
                <i class="fas fa-trophy text-yellow-500 text-3xl"></i>
                <p class="text-sm text-gray-500">Most Recommended Software 2020</p>
            </div>
            <div class="flex flex-col justify-center items-center px-2">
                <i class="fas fa-trophy text-yellow-500 text-3xl"></i>
                <p class="text-sm text-gray-500">Quality Choice 2020</p>
            </div>
            <div class="flex flex-col justify-center items-center px-2">
                <i class="fas fa-trophy text-yellow-500 text-3xl"></i>
                <p class="text-sm text-gray-500">Most Satisfied Users 2019</p>
            </div>
        </div>
    </div>


    {{-- Experience Section  --}}
    <p class="text-3xl text-center font-bold text-gray-800">The Experience</p>
    <p class="text-gray-500 text-center">Lorem ipsum dolor sit amet,lamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    <div class="flex flex-row justify-between w-full mt-5">
        <div class="flex flex-col px-2">
            <i class="fa-solid fa-cloud text-3xl"></i>
            <h5 class="text-xl font-bold text-gray-800 pt-2">Cloud Based Software</h5>
            <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <div class="flex flex-col px-2">
            <i class="fa-solid fa-people-group text-3xl"></i>
            <h5 class="text-xl font-bold text-gray-800 pt-2">Connections</h5>
            <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <div class="flex flex-col px-2">
            <i class="fa-solid fa-book text-3xl"></i>
            <h5 class="text-xl font-bold text-gray-800 pt-2">Easy of use and to learn</h5>
            <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
        </div>
    </div>

@endsection
