@extends('layouts.default')

@section('content')
    <h1 class="text-center">Rentals</h1>
    <livewire:rentals-table-component :locationID="$locationID"/>
@endsection
