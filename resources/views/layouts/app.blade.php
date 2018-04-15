<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>গোগা বাংলা</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Optional theme -->

    <link href="{{ url('/css/home/bloghome.css') }}" rel="stylesheet">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


{{--<link rel="stylesheet" href="{{URL::to('/')}}/public/css/bootstrap.min.css" >--}}

<!-- Custom styles for this template -->

</head>


<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">গোগা বাংলা</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link"  href={{ url('/home') }}>ঘরঘরঘর
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">ঘরে ঢুকি</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">ঘরে রেজিস্টার করি</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/add') }}">ঢুকাবো</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="{{ url('/logout') }}"> পালাই </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-12">

            @yield('content')

        </div>

    </div>
    <!-- /.row -->


</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy;গোগা বাংলা ত্রয়োবিংশ শতাব্দী</p>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
{{--<script src="{{url('/public/jquery/jquery.min.js')}}"></script>--}}
{{--<script src="{{url('/public/js/bootstrap.bundle.min.js')}}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    $(document).ready(function(){
        $('#words').select2();
    });
</script>

</body>

</html>
