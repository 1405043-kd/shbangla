@extends('layouts.mainlayout')

@section('content')

    <br>
    <br>
    <h2 class="card-header">{{ $nam->name }}</h2>
    <br>

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    {{--<article class="post" data-defid="{{ $d->id }}">--}}
    <span>
                    <?php $flagLike=0 ?>
        @if(Auth::user())
            @foreach($like as $lk)
                @if($lk->def_id==$d->id)
                    @if($lk->liker==Auth::user()->id)
                        <?php $flagLike=1 ?>
                    @endif
                @endif
            @endforeach
        @endif
        @if ($flagLike==1)
            <div class="btn btn-link btn-lg btn-like" style="color:green;text-decoration:none">
                             <a class="likeBtnPressed" id="<?php echo $d->id; ?>"
                                onClick="setTimeout(function(){
    window.location.reload();
},1000); "> <strong>সেরা</strong>  {{$d->like_count}}
                                 <i class="fa fa-thumbs-o-up"> </i>
                             </a>
                            </div>
        @else
            <div class="btn btn-link btn-lg btn-like" style="color: black;text-decoration:none">
                             <a class="likeBtn" id="<?php echo $d->id; ?>"
                                onClick="setTimeout(function(){
    window.location.reload();
},1000); "> <strong>সেরা</strong>   {{$d->like_count}}
                                 <i class="fa fa-thumbs-o-up"> </i>
                             </a>
                            </div>
        @endif

                </span>



    <span>
                    <?php $flagdisLike=0 ?>
        @if(Auth::user())
            @foreach($dislike as $dlk)
                @if($dlk->def_id==$d->id)
                    @if($dlk->liker==Auth::user()->id)
                        <?php $flagdisLike=1 ?>
                    @endif
                @endif
            @endforeach
        @endif
        @if ($flagdisLike==1)
            <div class="btn btn-link btn-lg btn-like" style="color: goldenrod;text-decoration:none">
                    <a class="dislikeBtnPressed" id="<?php echo $d->id; ?>" onClick="setTimeout(function(){
    window.location.reload();
},1000); ">
                        <strong> গোগা </strong> {{$d->dislike_count}}
                        <i class="fa fa-thumbs-o-down"></i>
                    </a>
                    </div>

        @else
            <div class="btn btn-link btn-lg btn-like" style="color: black;text-decoration:none">
                    <a class="dislikeBtn" id="<?php echo $d->id; ?>" onClick="setTimeout(function(){
    window.location.reload();
},1000); ">
                        <strong>গোগা</strong> {{$d->dislike_count}}
                        <i class="fa fa-thumbs-o-down"></i>
                    </a>
                    </div>
        @endif
                </span>
    <br>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <strong>_\ আখ্যা /_</strong><br>
    &nbsp;&nbsp;&nbsp;{{ $d->def }} <br><br>

    &nbsp;&nbsp;&nbsp;<strong>_\ একটি প্রায়োগিক দৃষ্টান্ত /_</strong> <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $d->sentence_ex }} <br><br>

    &nbsp;&nbsp;&nbsp;{{ \Carbon\Carbon::parse($d->created_at)->format('M d,Y')}} তারিখে <br>
    &nbsp;&nbsp;&nbsp;ব্যাখ্যা করেছেন
    @foreach( $user as $u )
        @if ($u->id==$d->adder_id)
            <a href="http://localhost:8000/member/{{$u->id}}">{{ $u->name }}    </a>
        @endif
    @endforeach
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;
    <div class="tags" >
        &nbsp;&nbsp;
        @foreach( $tags as $t )
            &nbsp;&nbsp;&nbsp;<a href="http://localhost:8000/tag/{{$t->tag_id}}">{{ $t->name }}    </a>
        @endforeach
    </div>
    <br>
    <!-- Social Media Share Buttons -->
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a class="social-link facebook" href="http://www.facebook.com/sharer.php?u={{ URL::current() }}" id="fb-share"
       rel="nofollow" target="_blank" title="Share on Facebook" ><i class="fa fa-facebook"></i> ফেসবুক</a>
    <a class="social-link twitter" href="https://twitter.com/share?url={{ URL::current() }};text=Simple%20Share%20Buttons&amp" id="tweet" rel="nofollow" target="_blank"
       title="Tweet this Page"><i class="fa fa-twitter"></i> টুইট</a>
    <a class="social-link gplus" id="gplus-share" href="https://plus.google.com/share?url={{ URL::current() }}" title="share it">
        <i class="fa fa-google-plus"></i>গুগল প্লাস</a>

    <div class="wabafat">


    </div>

@endsection
