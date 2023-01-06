@extends('layouts.default')

@section('content')
    <h1 class="center">Cars</h1>
    @livewire('cars-form-component')
    @livewire('cars-table-component')
@endsection
