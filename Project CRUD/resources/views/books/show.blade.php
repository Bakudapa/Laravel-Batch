@extends('layouts.app')

@section('title', 'Book Details')

@section('content')
<section class="intro">
    <div class="bg-image h-100">
        <div class="mask d-flex align-items-center h-100">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-8">
                        <div class="card mask-custom">
                            <div class="card-body">
                                <h1 class="text-white mb-4">Book Details</h1>

                                @if ($book->image)
                                    <div class="text-center mb-4">
                                        <img src="{{ asset('storage/' . $book->image) }}" 
                                             alt="{{ $book->name }}" 
                                             class="img-thumbnail shadow zoom-image" 
                                             style="max-width: 300px; height: auto;">
                                    </div>
                                @endif

                                <div class="details-container text-white mb-4">
                                    <div class="row mb-2">
                                        <div class="col-md-4"><strong>Name:</strong></div>
                                        <div class="col-md-8">{{ $book->name }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4"><strong>Genre:</strong></div>
                                        <div class="col-md-8">{{ $book->genre }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4"><strong>Price:</strong></div>
                                        <div class="col-md-8">${{ number_format($book->price, 2) }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4"><strong>Stock:</strong></div>
                                        <div class="col-md-8">{{ $book->stock }}</div>
                                    </div>
                                </div>

                                <div class="text-end mt-4">
                                    <a href="{{ route('books.index') }}" 
                                       class="btn rounded-pill btn-light btn-sm px-4">Back to Book List</a>
                                </div>
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
.details-container {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 1em;
    padding: 1.5rem;
    margin-bottom: 2rem;
}
.details-container .row {
    margin: 0;
    padding: 0.5rem 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}
.details-container .row:last-child {
    border-bottom: none;
}
.img-thumbnail {
    border: 2px solid rgba(255, 255, 255, 0.1);
    background-color: rgba(255, 255, 255, 0.05);
    backdrop-filter: blur(15px);
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
.zoom-image {
    transition: transform 0.3s ease;
    cursor: pointer;
}
.zoom-image:hover {
    transform: scale(1.1);
}
</style>
@endsection
