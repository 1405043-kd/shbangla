<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">

        /*.social-like .like { float:right }*/
        /*.social-like .count { float:right }*/

        /*.social-dislike .like { float:right }*/
        /*.social-dislike .count { float:right }*/
        /* Navbar */



        body {
            background-color: rgba(218, 218, 218, 0.98) !important;
        }






        .select2-search { background-color: #f1f1f1
        }
        .select2-search input { background-color: #d7d7d7
        }
        .select2-results { background-color: #bfbfbf
        }




        .social-like, .social-dislike {
            border: none;
            outline: none;
            font-size: 16px;
            /*width: 48%;*/
            background-color: #03A9F4;
            color: #fff;
        }
        .searchText{
            color: #b1b7ba;
        }
        .social-like {
            border-top-left-radius: 5px;
            text-align: right;
        }

        .social-dislike {
            border-top-right-radius: 5px;
            text-align: left;
        }

        .count, .like, .dislike {
            padding:10px;
        }

        .count, .dislike {
            background-color: #03A9F4;
            border-radius: 50%;
            font-size:12px;
        }

        .dislike {
            margin-left: -13px;
        }

        .count {
            margin-right: -10px;
        }

        .card-body h2{
            background: #343434;
            color: #dfdfdf
        }
         .accordion {
             background-color: #eee;
             color: #444;
             cursor: pointer;
             padding: 18px;
             width: 100%;
             border: none;
             text-align: left;
             outline: none;
             font-size: 15px;
             transition: 0.4s;
         }

        .active, .accordion:hover {
            background-color: #ccc;
        }
        .accordion:after {
            content: '\02795'; /* Unicode character for "plus" sign (+) */
            font-size: 13px;
            color: #777;
            float: right;
            margin-left: 5px;
        }

        .active:after {
            content: "\2796"; /* Unicode character for "minus" sign (-) */
        }

        .panel {
            padding: 0 18px;
            background-color: white;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
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
        .btn-group button {
            background-color: #4CAF50; /* Green background */
            border: 1px solid green; /* Green border */
            color: white; /* White text */
            padding: 10px 24px; /* Some padding */
            cursor: pointer; /* Pointer/hand icon */
            float: left; /* Float the buttons side by side */
        }

        /* Clear floats (clearfix hack) */
        .btn-group:after {
            content: "";
            clear: both;
            display: table;
        }

        .btn-group button:not(:last-child) {
            border-right: none; /* Prevent double borders */
        }

        /* Add a background color on hover */
        .btn-group button:hover {
            color: #3e8e41;
            background-color: white;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


{{--<link rel="stylesheet" href="{{URL::to('/')}}/public/css/bootstrap.min.css" >--}}

<!-- Custom styles for this template -->

</head>


<body>
@php ($x=0)
@php ($names = ['ক','খ','গ','ঘ','ঙ','চ','ছ','জ','ঝ','ঞ','ট','ঠ','ড','ঢ','ণ',
'ত','থ','দ','ধ','ন','প','ফ','ব','ভ','ম'])

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">গোগা বাংলা</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <form action="http://localhost:8000/word" method="get" class="form-inline" value="Submit form">
                        <br>
                        <label for="words"> <span class="searchText">যা জানতে চান লিখেন এইখানে    </span> </label>
                        <select name="s" id="words" class="form-control">
                            @foreach($words as $key => $word)
                                <option value="{{ $key }}">{{ $word }}</option>
                            @endforeach
                        </select>

                        <div class="form-group">
                            <button class="btn btn-default" type="submit" style="background-color:#b1b7ba">চলেন দেখি</button>
                        </div>

                    </form>
                </li>



                <li class="nav-item">
                    <a class="nav-link"  href={{ url('/home') }}>ঘরঘরঘর
                    </a>
                </li>

                @if (auth()->guest())
                    {{-- Show register and login links --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">ঘরে ঢুকি</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/register') }}">ঘরে রেজিস্টার করি</a>
                    </li>

                @endif

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/add') }}">ঢুকাবো</a>

                </li>
                @if (!auth()->guest())
                    {{-- Show register and login links --}}
                    <li class="nav-item">
                        <a class="nav-link"  href="{{ url('/logout') }}"> পালাই </a>
                    </li>
                @endif

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
                <h5 class="card-header">অক্ষর পঞ্জিকা</h5>
                <div class="card-body">
                    @for($t=0;$t<25;$t=$t+5)
                    <div class="btn-group" style="width:100%">

                        @for ($x=0;$x<5;$x++)
                            <button style="width:20%" onclick="location.href='http://localhost:8000/letter/{{$names[$t+$x]}}'" type="button"> {{ $names[$t+$x] }} </button>
                        @endfor
                        <br>

                    </div>
                    @endfor
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
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


<script>
    $(window).on('hashchange', function() {

        $('body').on('click', '.pagination a', function(e) {
            e.preventDefault();
            //  $('#load').append('<img style="position: absolute; left: 0; top: 0; z-index: 100000;" >');
            getDefs($(this).attr('href').split('page=')[1]);
        });
    });
    $(document).ready(function() {
    });

    function getDefs(page) {
        $.ajax({
            url : '?page=' + page,
            dataType: 'json',
        }).done(function (data) {
            $('.defs').html(data);
            location.hash = page;
        }).fail(function () {
            alert('Definitions could not be loaded.');
        });
    }
    $(document).ready(function(){
        $('#words').select2({
            placeholder : "আমি অনেক লোনলি",
            words: true,

        });

    });
    </script>

<script>
    var token = '{{ Session::token() }}';
    var urlLike = '{{ route('like') }}';
    var urldisLike = '{{ route('dislike') }}';
    var def_id;
</script>
<script>
    function myFunction2(x) {
        x.classList.toggle("fa-thumbs-up");
    }
</script>
<script>
$('.likeBtn').click(function(event){
    event.preventDefault();
    isLike = event.target.previousElementSibling == null;
    def_id=$(this).attr('id');
      alert('You nigga clicked on def_id '+def_id);
    // var isLIke= event.target.previousElementSibling==null;
    // def_id=event.target.parentNode.dataset[defid];



    $.ajax({
        method: 'POST',
        url: urlLike,
        data:{
            'isLike': isLike,
            'def_id': def_id,
            '_token': token,
        },
    })
        .success(function (r) {
            alert('database e dhuika gese hogar nati :\') ');
            console.log(r);
        })
        .fail(function (r) {
            alert('Definitions could not be loaded.');
            console.log(r);
        })
        .done(function() {
            event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You don\'t like this post' : 'Dislike';
            if (isLike) {
                event.target.nextElementSibling.innerText = 'Dislike';
            } else {
                event.target.previousElementSibling.innerText = 'Like';
            }
    });
});

</script>

<script>
    $('.dislikeBtn').click(function(event){
        event.preventDefault();
        def_id=$(this).attr('id');
        alert('You nigga clicked on def_id '+def_id);
        // var isLIke= event.target.previousElementSibling==null;
        // console.log(23435);
        // def_id=event.target.parentNode.dataset[defid];



        $.ajax({
            method: 'POST',
            url: urldisLike,
            data:{
                'disliked': 1,
                'def_id': def_id,
                '_token': token,
            },
        })
            .success(function (r) {
                alert('database e dhuika gese hogar nati :\') ');
                console.log(r);
            })
            .fail(function (r) {
                alert('Definitions could not be loaded.');
                console.log(r);
            });
    });



</script>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight){
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>



</body>

</html>
