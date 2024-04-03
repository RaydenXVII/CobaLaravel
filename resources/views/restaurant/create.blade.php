@extends('layouts.template')

@section('title', 'Tambah Restaurant')

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Tambah Restaurant</h1>
        <form action="{{ route('restaurant.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Restaurant</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Kota</label>
                <input type="text" class="form-control" id="city" name="city">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="descriptions" name="descriptions">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('restaurant') }}" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
