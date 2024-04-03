@extends('layouts.template')

@section('content')
    <h1 class="text-center">Daftar Restoran</h1>
    <a href="{{ route('restaurant.create') }}" class="mb-4 btn btn-primary">Add</a>
    <div>
        <table class="table rounded table-striped table-hover">
            <thead class="table-secondary">
                <tr class="">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $restaurant->name }}</td>
                        <td>{{ $restaurant->descriptions }}</td>
                        <td>
                            <a href="{{ route('restaurant.detail',  $restaurant->name) }}" class="btn btn-primary">Detail</a>
                            <a href="/editRestaurant/{{$restaurant->id}}" class="btn btn-warning">Edit</a>
                            <form action="/deleteRestaurant/{{$restaurant->id}}" method="POST" style="display: inline;">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus restoran ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
