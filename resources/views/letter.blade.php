@extends('layouts.mainlayout')

@section('content')

    <br>
    <br>
    <br>
    <div class="card my-4">
        <div class="card-body">
    @if ($letter_search)
    @foreach( $letter_search as $u )
        <a href="http://localhost:8000/word/{{$u->id}}">{{ $u->name }}    </a>
    @endforeach
    @else
        <h4> কোন শব্দ নাই ছোট্ট বন্ধু </h4>
    @endif
        </div>
    </div>

@endsection
