@extends('templates/template')

@section('title', 'Edit Category')

@section('container')
<div class="row mt-3 justify-content-center align-items-center">
    <div class="col-5">
        <form class="mb-4 form-style" action="{{ url('/category/edit/' . $category->id) }}" method="POST">
            @csrf
            @method('patch')
            <h1 class="text-center mb-4">Edit Category</h1>
            <div class="form-group">
                <label for="">Category Name</label>
                <input type="text" class="form-control" name="name" value="{{ $category->name }}">
            </div>
            <button type="submit" id="btn-submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>
</div>
@endsection