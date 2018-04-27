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
    <h4>প্রতিশব্দঃ </h4>
    @foreach($synonym as $syn)
        <a href="http://localhost:8000/word/{{ $words[reset($syn)] }}" > {{ $words[reset($syn)] }} </a>
    @endforeach

    <div class="card my-4">


        @foreach( $Def as $d )
            <div class="card-body">


                <h2 class="card-header">{{ $nam->name }}</h2>
                <br>
                <article class="post" data-defid="{{ $d->id }}">
                <a href="#" class="likeBtn"> Like {{$d->like_count}}</a>
                <a href="#"> Dislike  {{$d->dislike_count}} </a>
                <i onclick="" class="fa fa-thumbs-down"></i>
                <br>
                <br>
                {{ $d->def }} <br><br>

                একটি প্রায়োগিক দৃশ্যঃ {{ $d->sentence_ex }} <br><br>
                {{ \Carbon\Carbon::parse($d->created_at)->format('M d,Y')}} তারিখে <br>
                ব্যাখ্যা করেছেন
                @foreach( $user as $u )
                    @if ($u->id==$d->adder_id)
                        <a href="http://localhost:8000/member/{{$u->id}}">{{ $u->name }}    </a>
                    @endif
                @endforeach
                <br><br>
                <h4> ত্যাগসমূহ </h4>
                <div class="tags" >
                    @foreach( $tags as $t )
                        <a href="http://localhost:8000/tag/{{$t->tag_id}}">{{ $t->name }}    </a>
                    @endforeach
                </div>
                <p>শেয়ার করুন</p>

                <!-- Social Media Share Buttons -->

                <a class="social-link facebook" href="http://www.facebook.com/sharer.php?u={{ URL::current() }}" id="fb-share"
                   rel="nofollow" target="_blank" title="Share on Facebook" ><i class="fa fa-facebook"></i> ফেসবুক</a>
                <a class="social-link twitter" href="https://twitter.com/share?url={{ URL::current() }};text=Simple%20Share%20Buttons&amp" id="tweet" rel="nofollow" target="_blank"
                   title="Tweet this Page"><i class="fa fa-twitter"></i> টুইট</a>
                <a class="social-link gplus" id="gplus-share" href="https://plus.google.com/share?url={{ URL::current() }}" title="share it">
                    <i class="fa fa-google-plus"></i>গুগল প্লাস</a>
                </article>
            </div>
        @endforeach
        <ul class="pagination pagination-sm">
            {{ $Def->links() }}
    </ul>
    </div>


@endsection
