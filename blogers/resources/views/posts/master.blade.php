<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Blog Home</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('blog/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('blog/css/blog-home.css')}}" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Jquery Ajax -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</head>

<body style="background: lightgoldenrodyellow">

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
</body>

</html>

