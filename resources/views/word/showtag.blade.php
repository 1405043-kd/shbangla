@extends('layouts.mainlayout')

@section('content')

    <br>
    <h4>
        @foreach( $tags as $t )
            #{{ $t->name }}
        @endforeach
    </h4>


    <div class="card my-4">
        @foreach( $Def as $d )
            <div class="card-body">

                <h2 class="card-header">{{ $d->name }}</h2>
                <br>
                {{ $d->def }} <br><br>

                একটি প্রায়োগিক দৃশ্যঃ {{ $d->sentence_ex }} <br><br>
                {{ \Carbon\Carbon::parse($d->created_at)->format('M d,Y')}} তারিখে <br>
                ব্যাখ্যা করেছেন
                @foreach( $user as $u )
                    @if ($u->id==$d->adder_id)
                        {{ $u->name }}
                    @endif
                @endforeach
                <br><br>

                <p>শেয়ার করুন</p>

                <!-- Social Media Share Buttons -->

                <a class="social-link facebook" href="http://www.facebook.com/sharer.php?u={{ URL::current() }}" id="fb-share"
                   rel="nofollow" target="_blank" title="Share on Facebook" ><i class="fa fa-facebook"></i> ফেসবুক</a>
                <a class="social-link twitter" href="https://twitter.com/share?url={{ URL::current() }};text=Simple%20Share%20Buttons&amp" id="tweet" rel="nofollow" target="_blank"
                   title="Tweet this Page"><i class="fa fa-twitter"></i> টুইট</a>
                <a class="social-link gplus" id="gplus-share" href="https://plus.google.com/share?url={{ URL::current() }}" title="share it">
                    <i class="fa fa-google-plus"></i>গুগল প্লাস</a>
            </div>
        @endforeach
    </div>

@endsection
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="public/social.js">	</script>