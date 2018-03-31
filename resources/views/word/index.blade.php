@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slfwlg">
        @foreach( $Def as $d )
            <li>   {{ $nam->name }} </li>
            <li>   {{ $d->def }} </li>
            <li>   {{ $d->adder_id }} </li>
        @endforeach
    </div>
@endsection
