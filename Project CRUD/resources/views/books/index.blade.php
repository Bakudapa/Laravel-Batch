@extends('layouts.app')

@section('title', 'Book List')

@section('content')
<section class="intro fade-in">
    <div class="mask d-flex align-items-center h-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card mask-custom">
                        <div class="card-body">
                            <h1 class="text-white mb-4">Books List</h1>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Add New Book</a>

                            @if (Auth::user()->role === 'admin')
                                <a href="{{ route('books.export-pdf') }}" class="btn btn-secondary rounded-pill mb-3">Export to PDF</a>
                            @endif

                            <div class="table-responsive">
                                <table class="table table-hover text-black mb-0">
                                    <thead class="table-header">
                                        <tr>
                                            <th>ID</th>
                                            <th>Cover</th>
                                            <th>Name</th>
                                            <th>Genre</th>
                                            <th>Price</th>
                                            <th>Stock</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($books as $book)
                                            <tr class="table-row">
                                                <td>{{ $book->id }}</td>
                                                <td>
                                                    @if ($book->image)
                                                        <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->name }}" class="img-thumbnail" style="width: 100px; height: auto;">
                                                    @else
                                                        <p class="text-white-50">No Image</p>
                                                    @endif
                                                </td>
                                                <td>{{ $book->name }}</td>
                                                <td>{{ $book->genre ?? '-' }}</td>
                                                <td>${{ number_format($book->price, 2) }}</td>
                                                <td>{{ $book->stock }}</td>
                                                <td>
                                                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm rounded-pill">View</a>
                                                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm rounded-pill">Edit</a>
                                                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm rounded-pill" onclick="return confirm('Are you sure you want to delete this book?')">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection