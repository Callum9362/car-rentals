@extends('layouts.default')

@section('content')
    <h1>Rentals</h1>
    @foreach($rentals as $rental)
        <span>{{ $rental->start }}</span>
        <span>{{ $rental->start }}</span>
        <br>
    @endforeach
@endsection
