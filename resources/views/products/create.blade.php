@extends('templates/template')

@section('title', 'Create Product')

@section('container')

<div class="row mt-3 justify-content-center">
    <div class="col-6">
        <form class="mb-4 form-style" action="{{ url('/product/create') }}" method="POST">
            @csrf
            <h1 class="text-center mb-4">Create Product</h1>
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}">
                @error('product_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category_id" id="category" class="custom-select @error('category_id') is-invalid @enderror">
                    <option value="">-- Select Category --</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}"{{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="">Stock</label>
                <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}">
                @error('stock')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</div>
@endsection