@extends('layouts.app')

@section('content')

    <div class="card my-4">
        <h5 class="card-header">{{ $nam->name }}</h5>
        <div class="card-body">
            @foreach( $Def as $d )
                <li>   {{ $nam->name }} </li>
                <li>   {{ $d->def }} </li>
                <li>   {{ $d->adder_id }} </li>
            @endforeach
        </div>
    </div>

@endsection
