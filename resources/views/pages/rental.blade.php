@extends('layouts.default')

@section('content')

    <div class="flex justify-center items-center">
        <div class="p-2 bg-indigo-600 items-center text-white px-2 leading-none lg:rounded-full flex lg:inline-flex mt-2" role="alert">
            <i class="fa-solid fa-skull-crossbones mr-2"></i><p class="text-sm">Warning! You are editing a customer's rental, are you sure you want to be here?</p>
        </div>
    </div>

    <div class="bg-white p-6">
        <div class="flex flex-wrap -mx-2">
            <div class="w-full md:w-1/3 px-2">
                <div class="bg-gray-200 p-4 rounded-lg">
                    <h3 class="text-lg font-medium"><i class="fa-solid fa-person mr-2"></i> Customer Information</h3>
                    <p class="text-gray-500">{{ $rental->customer->first_name }} {{ $rental->customer->last_name }}</p>
                </div>
            </div>

            <div class="w-full md:w-1/3 px-2">
                <div class="bg-gray-200 p-4 rounded-lg">
                    <h3 class="text-lg font-medium"><i class="fa-solid fa-car mr-2"></i>Car Information</h3>
                    <p class="text-gray-500">{{ $rental->car->make  }} {{$rental->car->model}}</p>
                </div>
            </div>

            <div class="w-full md:w-1/3 px-2">
                <div class="bg-gray-200 p-4 rounded-lg">
                    <h3 class="text-lg font-medium"><i class="fa-solid fa-dollar-sign mr-2"></i>Rental Information</h3>
                    <p class="text-gray-500">{{ $rental->id }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
