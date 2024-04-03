@extends('layouts.template')

@section('title', 'Edit Restaurant')

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Edit Restaurant</h1>
        <form method="POST" action="/editRestaurant/{{$restaurant->id}}/update">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Restaurant</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$restaurant->name}}">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$restaurant->address}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Kota</label>
                <input type="text" class="form-control" id="city" name="city" value="{{$restaurant->city}}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="descriptions" name="descriptions" value="{{$restaurant->descriptions}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/restaurant" class="btn btn-danger">Back</a>
        </form>
    </div>
@endsection
