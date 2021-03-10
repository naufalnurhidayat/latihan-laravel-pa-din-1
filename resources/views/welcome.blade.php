@extends('templates/template')

@section('title', 'Home')

@section('container')
<div class="jumbotron">
  <h1 class="display-4">Opal 1673 Store</h1>
  <p class="lead">MERCH AND STICKER.</p>
  <hr class="my-4">
  <p>SUBSCRIBE OPAL 1673.</p>
  <a class="btn btn-primary btn-lg" href="{{ url('/products') }}" role="button">View Products</a>
</div>
@endsection