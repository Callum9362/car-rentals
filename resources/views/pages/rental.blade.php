@extends('layouts.default')

@section('content')
    <h1>Rental</h1>
    <div class="bg-white p-6">
        <div class="flex flex-wrap -mx-2">
            <div class="w-full md:w-1/3 px-2">
                <div class="bg-gray-200 p-4 rounded-lg">
                    <h3 class="text-lg font-medium">Customer</h3>
                    <p class="text-gray-500">{{ $rental->customer->first_name }} {{ $rental->customer->last_name }}</p>
                </div>
            </div>

            <div class="w-full md:w-1/3 px-2">
                <div class="bg-gray-200 p-4 rounded-lg">
                    <h3 class="text-lg font-medium">Car</h3>
                    <p class="text-gray-500">{{ $rental->car->make  }} {{$rental->car->model}}</p>
                </div>
            </div>

            <div class="w-full md:w-1/3 px-2">
                <div class="bg-gray-200 p-4 rounded-lg">
                    <h3 class="text-lg font-medium">Rental</h3>
                    <p class="text-gray-500">{{ $rental->id }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
