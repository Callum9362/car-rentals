@extends('layouts.default')

@section('content')
    <div>
        <table class="table-auto w-full mt-5">
            <thead>
            <tr class="bg-gray-800 text-white">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Address</th>
                <th class="px-4 py-2">Contact</th>
                <th class="px-4 py-2">Open Hours</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($locations as $location)
                <tr class="bg-gray-100 text-center">
                    <td class="px-4 py-2 flex-wrap">
                        {{ $location->name }}
                    </td>
                    <td class="px-4 py-2">
                        {{ $location->address  }}
                    </td>
                    <td class="px-4 py-2">
                        {{ $location->phone_number }}
                    </td>
                    <td class="px-4 py-2">
                        {{ $location->operation_hours }}
                    </td>
                    <td class="px-4 py-2">
                        <a href="{{ route('rentals', ['locationID' => $location->id]) }}">Rentals</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
