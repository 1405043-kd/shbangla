<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">

        .card-body h2{
            background: #3498a5;
            color:#fff
        }
        .tags a {
            display: inline-block;
            height: 24px;
            line-height: 24px;
            position: relative;
            margin: 0 16px 8px 0;
            padding: 0 10px 0 12px;
            background: #1613a5;
            -webkit-border-bottom-right-radius: 3px;
            border-bottom-right-radius: 3px;
            -webkit-border-top-right-radius: 3px;
            border-top-right-radius: 3px;
            -webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
            box-shadow: 0 1px 2px rgba(0,0,0,0.2);
            color: #fff;
            font-size: 12px;
            font-family: "Lucida Grande","Lucida Sans Unicode",Verdana,sans-serif;
            text-decoration: none;
            text-shadow: 0 1px 2px rgba(0,0,0,0.2);
            font-weight: bold;
        }
        .tags a:hover {
            background-color:#fff;
            color: #4a66b7;
        }
        .tags a:before {
            content: "";
            position: absolute;
            top:0;
            left: -12px;
            width: 0;
            height: 0;
            border-color: transparent #3243A5 transparent transparent;
            border-style: solid;
            border-width: 12px 12px 12px 0;
        }
        .tags a:after {
            content: "";
            position: absolute;
            top: 10px;
            left: 1px;
            float: left;
            width: 5px;
            height: 5px;
            -webkit-border-radius: 50%;
            border-radius: 50%;
            background: #fff;
            -webkit-box-shadow: -1px -1px 2px rgba(0,0,0,0.4);
            box-shadow: -1px -1px 2px rgba(0,0,0,0.4);
        }

        a.social-link {
            display:inline;
            text-decoration:none;
            padding:6px 12px;
            margin: 0;
            -webkit-transition: background 0.1s linear;
            -moz-transition: background 0.1s linear;
            -ms-transition: background 0.1s linear;
            -o-transition: background 0.1s linear;
            transition: background 0.1s linear;
        }
        a.facebook{
            background-color:#4a66b7;
            color:#fff;
        }
        a.twitter {
            background-color:#00acee;
            color:#fff;
        }
        a.gplus {
            background-color:#dd4b38;
            color:#fff;
        }
        a.email {
            background-color:#ff9600;
            color:#fff;
        }
        a:hover.facebook {
            background-color:#fff;
            color: #4a66b7;
        }
        a:hover.twitter {
            background-color:#fff;
            color:#00acee;
        }
        a:hover.gplus {
            background-color:#fff;
            color:#dd4b38;
        }
        a:hover.email {
            background-color:#fff;
            color:#ff9600;
        }

    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>গোগা বাংলা</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Optional theme -->

    <link href="{{ url('/css/home/bloghome.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" >

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
        <a class="navbar-brand" href="{{ url('/home') }}">গোগা বাংলা</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link"  href={{ url('/home') }}>ঘরঘরঘর
                        <span class="sr-only">(current)</span>
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
        <div class="col-md-8">


           @yield('content')

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">খোঁজ লাগান</h5>
                <div class="card-body">
                    <form action="http://localhost:8000/drow/" method="get" class="form-inline" value="Submit form">
                        <br>
                        <label for="words">লেখেন এইখানে </label><br>
                        <select name="s" id="words" class="form-control">
                            @foreach($words as $key => $word)
                                <option value="{{ $key }}">{{ $word }}</option>
                            @endforeach
                        </select>

                        <div class="form-group">
                            <button class="btn btn-success" type="submit">চলেন দেখি</button>
                        </div>

                    </form>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">উহস</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Web De</a>
                                </li>
                                <li>
                                    <a href="#">HTML</a>
                                </li>
                                <li>
                                    <a href="#">Freebies</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">JavaScript</a>
                                </li>
                                <li>
                                    <a href="#">CSS</a>
                                </li>
                                <li>
                                    <a href="#">Tutorials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">আজকের শব্দ</h5>
                <div class="card-body">
                   আমরা বোক্সোদ না। এইটাতেও একদিন শব্দে শব্দে ভরে দিবো।
                </div>
            </div>

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
        $('#words').select2({
            placeholder : "আমি অনেক লোনলি",
            words: true
        });
    });
</script>


</body>

</html>
