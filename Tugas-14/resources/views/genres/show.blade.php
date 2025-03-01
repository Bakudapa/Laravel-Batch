@extends('layouts.master')

@section('title', 'Genre Details')

@section('content')
    <div class="row mb-4">
        <div class="col-12">
            <a href="{{ url('/genre') }}" class="btn btn-secondary mb-3">
                <i class="bi bi-arrow-left"></i> Back to List
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $genre->name }}</h3>
                    <div class="text-muted small mb-4">
                        <div><strong>Created:</strong> {{ $genre->created_at->format('d M Y, H:i') }}</div>
                        <div><strong>Last Updated:</strong> {{ $genre->updated_at->format('d M Y, H:i') }}</div>
                    </div>
                    
                    <div class="mb-4 border-top pt-3">
                        <h5>Description:</h5>
                        <p>{{ $genre->description ?: 'No description available' }}</p>
                    </div>
                    
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ url('/genre/'.$genre->id.'/edit') }}" class="btn btn-warning">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <form action="{{ url('/genre/'.$genre->id) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this genre?')">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection