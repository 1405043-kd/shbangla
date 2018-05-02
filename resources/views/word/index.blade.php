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
    <div id="product_container">
        @include('load')
    </div>
@endsection
