@extends('base')

@include('navbar')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="my-4">Car List</h1>
        <a href="{{ route('cars.create') }}" class="btn btn-primary">Create</a>
    </div>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th class="text-center">Name</th>
                <th class="text-center">Model</th>
                <th class="text-center">Description</th>
                <th class="text-center">Release Date</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->description }}</td>
                    <td class="text-center">{{ $car->release_date }}</td>
                    <td class="text-center">
                        <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this car?')"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
