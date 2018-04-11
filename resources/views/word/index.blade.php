@extends('layouts.mainlayout')

@section('content')

    <h2>{{ $nam->name }} added by
        @foreach( $user as $u )
            @if ($u->id==$nam->adder_id)
                {{ $u->name }} </h2>
            @endif
        @endforeach

    <div class="card my-4">
        @foreach( $Def as $d )
        <div class="card-body">

            <h2 class="card-header">{{ $nam->name }}</h2>
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
                <h4> সম্ভার </h4>
                @foreach( $tags as $t )
                    <a href="http://localhost:8000/tag/{{$t->tag_id}}">{{ $t->name }}    </a>
                @endforeach

            <div id="share-buttons">
                <!-- Facebook -->
                <a href="http://www.facebook.com/sharer.php?u={{URL::current()}}" target="_blank">
                    <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                </a>

                <!-- Google+ -->
                <a href="https://plus.google.com/share?url={{URL::current()}}" target="_blank">
                    <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
                </a>


                <!-- Reddit -->
                <a href="http://reddit.com/submit?url{{ URL::current() }}&amp;title=Simple Share Buttons" target="_blank">
                    <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
                </a>

                <!-- Twitter -->
                <a href="https://twitter.com/share?url={{ URL::current() }}&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
                    <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
                </a>


            </div>

        </div>
            @endforeach
    </div>

@endsection
