@extends('layouts.template')

@section('content')
    @if ($restaurant)
        <h1 class="text-center">Detail Restoran</h1>
        <h2>{{ $restaurant['name'] }}</h2>
        <p>{{ $restaurant['descriptions'] }}</p>
    @else
        <p>Restoran tidak ditemukan.</p>
    @endif
@endsection
