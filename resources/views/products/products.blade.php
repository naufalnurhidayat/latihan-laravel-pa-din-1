@extends('templates/template')

@section('title', 'Products')

@section('container')

<h1>Product List</h1>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $product->product_name }}</td>
            <td>{{ $product->category->name }}</td>
            <td>
                <a href="{{ url('/product/' . $product->id) }}" class="btn btn-warning">Detail</a>
                <a href="{{ url('/product/edit/' . $product->id) }}" class="btn btn-success">Edit</a>
                <form action="{{ url('/product/' . $product->id) }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection