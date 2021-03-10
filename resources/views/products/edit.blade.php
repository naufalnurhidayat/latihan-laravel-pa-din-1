@extends('templates/template')

@section('title', 'Edit Product')

@section('container')

<div class="container mt-5" style="width: 33%;">
    <form class="mb-4 form-style" action="{{ url('/product/edit/' . $product->id) }}" method="POST">
        @method('patch')
        @csrf
        <h1 class="text-center mb-4">Edit Product</h1>
        <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="number" class="form-control" name="price" value="{{ $product->price }}">
        </div>
        <div class="form-group">
            <label for="">Stock</label>
            <input type="number" class="form-control" name="stock" value="{{ $product->stock }}">
        </div>
        <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Edit</button>
    </form>
</div>
@endsection