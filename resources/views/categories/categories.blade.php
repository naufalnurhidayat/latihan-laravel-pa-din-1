@extends('templates/template')

@section('title', 'Categories')

@section('container')
<div class="row">
    <div class="col">
        <h1>Product List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ url('/category/edit/' . $category->id) }}" class="btn btn-success">Edit</a>
                        <form action="{{ url('/category/' . $category->id) }}" method="POST" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection