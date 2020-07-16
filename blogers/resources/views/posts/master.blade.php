<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('blog/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('blog/css/blog-home.css')}}" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Jquery Ajax -->
    <script src="jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

<!-- Navigation -->
@include('posts.menu_top')

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            @yield('content')

        </div>

        <!-- Sidebar Widgets Column -->
        @include('posts.menu_right')

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
@include('posts.menu_footer')

<!-- Bootstrap core JavaScript -->
<script src="{{asset('blog/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('blog/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('JS/commentJS.js') }}"></script>

</body>

</html>

