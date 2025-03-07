@extends('layouts.app')

@section('title', 'Edit Book')

@section('content')
<section class="intro">
    <div class="bg-image h-100">
        <div class="mask d-flex align-items-center h-100">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-8">
                        <div class="card mask-custom">
                            <div class="card-body">
                                <h1 class="text-white mb-4">Edit Book</h1>

     @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name" class="form-label text-white">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $book->name) }}"
                   class="form-control bg-light bg-opacity-25 text-white border-light" required>
        </div>

        <div class="mb-4">
            <label for="genre" class="form-label text-white">Genre:</label>
            <input type="text" name="genre" id="genre" value="{{ old('genre', $book->genre) }}"
                   class="form-control bg-light bg-opacity-25 text-white border-light">
        </div>

        <div class="mb-4">
            <label for="price" class="form-label text-white">Price:</label>
            <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $book->price) }}"
                   class="form-control bg-light bg-opacity-25 text-white border-light" required>
        </div>

        <div class="mb-4">
            <label for="stock" class="form-label text-white">Stock:</label>
            <input type="number" name="stock" id="stock" value="{{ old('stock', $book->stock) }}"
                   class="form-control bg-light bg-opacity-25 text-white border-light" required>
        </div>

        <div class="mb-4">
            <label for="image" class="form-label text-white">Image:</label>
            @if ($book->image)
                <div class="mb-3 text-center">
                    <img src="{{ asset('storage/' . $book->image) }}" 
                         alt="{{ $book->name }}" 
                         class="img-thumbnail shadow" 
                         style="width: 150px; height: auto; background: rgba(255, 255, 255, 0.1);">
                </div>
            @endif
            <input type="file" name="image" id="image"
                   class="form-control bg-light bg-opacity-25 text-white border-light" accept="image/*">
        </div>

        <div class="text-end mt-4">
            <a href="javascript:history.back()" class="btn rounded-pill btn-light btn-sm me-2 px-4">Back</a>
            <button type="submit" class="btn btn-primary rounded-pill btn-sm px-4">Update Book</button>
        </div>
    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
html, body, .intro {
    height: 100%;
}
.mask-custom {
    background: rgba(24, 24, 16, .2);
    border-radius: 2em;
    backdrop-filter: blur(25px);
    border: 2px solid rgba(255, 255, 255, 0.05);
    background-clip: padding-box;
    box-shadow: 10px 10px 10px rgba(46, 54, 68, 0.03);
    background-image: url('{{ asset("bg.jpg") }}');
}
.form-control {
    background-color: rgba(255, 255, 255, 0.1) !important;
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: white !important;
    transition: all 0.3s ease;
}
.form-control:focus {
    background-color: rgba(255, 255, 255, 0.15) !important;
    border-color: rgba(255, 255, 255, 0.3);
    box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.1);
}
.form-label {
    font-weight: 500;
    letter-spacing: 0.5px;
}
.btn {
    padding: 0.5rem 1.5rem;
    font-weight: 500;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
}
.btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.card-body {
    padding: 2.5rem;
}
</style>
@endsection