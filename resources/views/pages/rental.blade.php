@extends('layouts.default')

@section('content')

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

            <div class="w-full md:w-1/3 px-2 text-center">
                <div class="bg-gray-200 p-4 rounded-lg">
                    <h3 class="text-lg font-medium mb-2"><i class="fa-solid fa-dollar-sign mr-2"></i>Rental Information</h3>
                    <p class="text-gray-500"><span class="font-bold">InvoiceID#</span> {{ $rental->id }}</p>
                    <p class="text-gray-500"><span class="font-bold">Start:</span> {{ $rental->start }}</p>
                    <p class="text-gray-500"><span class="font-bold">End:</span> {{ $rental->end }}</p>
                    <p class="text-gray-500"><span class="font-bold">Rate:</span> ${{ $rental->rate }}</p>
                    <p class="text-gray-500"><span class="font-bold">Total:</span> ${{ $total }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
