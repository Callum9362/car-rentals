@extends('layouts.default')

@section('content')

    {{-- Hero Section 1 --}}
    <div class="flex flex-col justify-center items-center w-full whitespace-pre-line mt-10">
        <p class="text-3xl font-bold text-gray-800">Solutions for every rental company</p>
        <p class="text-gray-500">The only rental software you need, whatever your industry</p>
    </div>

    <div class="flex justify-center mt-10">
        <div class="w-1/2 px-4 my-4">
            <div class="relative rounded-md shadow-md">
                <div class="absolute inset-0 flex items-end justify-center p-4">
                    <h5 class="text-xl font-bold text-gray-800">Car Rental</h5>
                </div>
            </div>
        </div>
        <div class="w-1/2 px-4 my-4">
            <div class="relative rounded-md shadow-md">
                <div class="absolute inset-0 flex items-end justify-center p-4">
                    <h5 class="text-xl font-bold text-gray-800">Boat Rental</h5>
                </div>
            </div>
        </div>
        <div class="w-1/2 px-4 my-4">
            <div class="relative rounded-md shadow-md">
                <div class="absolute inset-0 flex items-end justify-center p-4">
                    <h5 class="text-xl font-bold text-gray-800">RV Rental</h5>
                </div>
            </div>
        </div>
        <div class="w-1/2 px-4 my-4">
            <div class="relative rounded-md shadow-md">
                <div class="absolute inset-0 flex items-end justify-center p-4">
                    <h5 class="text-xl font-bold text-gray-800">Construction Rental</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="flex flex-col justify-center items-center whitespace-pre-line mt-10">
        <p class="text-3xl font-bold text-gray-800">Our Customers</p>
        <p class="text-gray-500 text-center w-2/5">At CarRent we’ve designed a platform that fits into rental organisations of all shapes and sizes and offers solutions to many industry segments from car and boat rental to car sharing.</p>
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
@endsection
