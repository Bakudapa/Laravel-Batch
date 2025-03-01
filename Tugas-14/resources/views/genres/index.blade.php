@extends('layouts.master')

@section('title', 'Genre List')

@section('content')
    <div class="row mb-4">
        <div class="col-md-6">
            <h3>Manage Genres</h3>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ url('/genre/create') }}" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i> Add New Genre
            </a>
        </div>
    </div>

    @if(count($genres) === 0)
        <div class="alert alert-info">
            No genres found. Create one!
        </div>
    @else
        <div class="row">
            @foreach($genres as $genre)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">{{ $genre->name }}</h5>
                            <p class="card-text">{{ \Illuminate\Support\Str::limit($genre->description, 100) }}</p>
                        </div>
                        <div class="card-footer bg-transparent">
                            <div class="d-flex justify-content-between">
                                <a href="{{ url('/genre/'.$genre->id) }}" class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i> View
                                </a>
                                <a href="{{ url('/genre/'.$genre->id.'/edit') }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ url('/genre/'.$genre->id) }}" method="POST" class="delete-form d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this genre?')">
                                        <i class="bi bi-trash"></i> Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection