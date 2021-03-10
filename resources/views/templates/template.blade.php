<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Products | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('style/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">My CRUD</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/product/create') }}">Create Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/products') }}">View Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/categories') }}">View Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/category/create') }}">Create Category</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('container')
    </div>

    <script src="{{asset('scripts/jquery-3.5.0.min.js')}}"></script>
    <script src="{{asset('scripts/bootstrap.min.js')}}"></script>
</body>

</html>