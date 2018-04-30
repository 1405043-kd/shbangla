@extends('layouts.mainlayout')

@section('content')

    <br>
    <h4>{{ $nam->name }} ব্যাপারটা গোগাবাংলায় প্রথম ব্যাখ্যা করছেন
        @foreach( $user as $u )
            @if ($u->id==$nam->adder_id)
                {{ $u->name }} </h4>
    @endif
    @endforeach
    <br>
    <button class="accordion">প্রতিশব্দঃ </button>
    <div class="panel">
        @foreach($synonym as $syn)
            <a href="http://localhost:8000/word/{{ $words[reset($syn)] }}" > {{ $words[reset($syn)] }} </a>
        @endforeach
    </div>

    <button class="accordion">বিপরীত শব্দঃ</button>
    <div class="panel">
        @foreach($synonym as $syn)
            <a href="http://localhost:8000/word/{{ $words[reset($syn)] }}" > {{ $words[reset($syn)] }} </a>
        @endforeach
    </div>

    <div class="card my-4">


        @foreach( $Def as $d )
            <div class="card-body">


                <h2 class="card-header">{{ $nam->name }}</h2>
                <br>


                {{--<article class="post" data-defid="{{ $d->id }}">--}}
                <span>
                    <?php $flagLike=0 ?>
                    @foreach($like as $lk)
                        @if($lk->def_id==$d->id)
                            @if($lk->liker==Auth::user()->id)
                                <?php $flagLike=1 ?>
                            @endif
                        @endif
                    @endforeach
                        @if ($flagLike==1)
                            <div class="btn btn-link btn-lg btn-like">
                             <a class="likeBtnPressed" id="<?php echo $d->id; ?>"
                                onClick="window.location.reload()"> সেরা বুঝাইছে {{$d->like_count}}
                                 <i class="fa fa-thumbs-o-up"> </i>
                             </a>
                            </div>
                        @else
                            <div class="btn btn-link btn-lg btn-like">
                             <a class="likeBtn" id="<?php echo $d->id; ?>"
                                onClick="window.location.reload()"> সেরা বুঝাইছে {{$d->like_count}}
                                 <i class="fa fa-thumbs-o-up"> </i>
                             </a>
                            </div>
                            @endif

                </span>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;


                <span>
                    <?php $flagdisLike=0 ?>
                    @foreach($dislike as $dlk)
                        @if($dlk->def_id==$d->id)
                            @if($dlk->liker==Auth::user()->id)
                                <?php $flagdisLike=1 ?>
                            @endif
                        @endif
                    @endforeach
                    @if ($flagdisLike==1)
                            <div class="btn btn-link btn-lg btn-like">
                    <a class="dislikeBtnPressed" id="<?php echo $d->id; ?>" onClick="window.location.reload()">
                        গোগা বুঝাইছে {{$d->dislike_count}}
                        <i class="fa fa-thumbs-o-down"></i>
                    </a>
                    </div>

                    @else
                    <div class="btn btn-link btn-lg btn-like" style="color: #b8daff">
                    <a class="dislikeBtn" id="<?php echo $d->id; ?>" onClick="window.location.reload()">
                        গোগা বুঝাইছে {{$d->dislike_count}}
                        <i class="fa fa-thumbs-o-down"></i>
                    </a>
                    </div>
                    @endif

                    
                </span>
                <br>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                আখ্যা//<br>
                &nbsp;&nbsp;&nbsp;{{ $d->def }} <br><br>

                &nbsp;&nbsp;&nbsp;একটি প্রায়োগিক দৃষ্টান্ত// <br>
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





                </article>
            </div>
        @endforeach
            {{ $Def->links() }}
    </div>


@endsection
