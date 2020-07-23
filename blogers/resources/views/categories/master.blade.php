<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Categories</title>

    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('category/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('category/css/heroic-features.css')}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
@include('categories.menu_top')

<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4" style="background: pink">
        <h1 class="display-3">A Warm Welcome!</h1>
        <p class="lead">Writting and share anything you want.</p>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

       @yield('content')

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
@include('categories.menu_footer')

<!-- Bootstrap core JavaScript -->
<script src="{{asset('category/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('category/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>

