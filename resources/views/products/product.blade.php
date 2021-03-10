@extends('templates/template')

@section('title', 'Product')

@section('container')
<div class="row mt-3">
    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $product->product_name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Categpry: {{ $product->category->name }}</h6>
                <h6 class="card-subtitle mb-2 text-muted">Price: {{ $product->price }}</h6>
                <p class="card-text">Stock: {{ $product->stock }}</p>
                <a href="{{ url('/products') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection