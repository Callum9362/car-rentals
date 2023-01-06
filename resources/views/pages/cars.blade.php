@extends('layouts.default')

@section('content')
    <h1>Cars</h1>
    @foreach($cars as $car)
        <span>{{ $car->make }}</span>
    @endforeach
@endsection
