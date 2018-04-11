@extends('layouts.mainlayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">যা যা খেলা চলে</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="slfwlg">

        @foreach( $Def as $d )
            <li>   {{ $d->name }} </li>
            <li>   {{ $d->def }} </li>
            <li>   {{ $d->adder_id }} </li>
        @endforeach
    </div>
@endsection
