@extends('layouts.mainlayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">

                            {{ session('status') }}
                            @foreach($words as $w)
                                <h3> $w[name]</h3> </br>
                            @endforeach

                        </div>
                    @endif

                    <div class="card-body">
                        <h5 class="card-header">ঘর ঘর ঘর</h5>
                        তুমি ত লোগোদ ইন
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
