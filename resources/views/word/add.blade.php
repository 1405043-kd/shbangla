@extends('layouts.app')

@section('content')

    <form method="post" action="/words">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <input type="text" name="name" placeholder="Enter Word Name" >

        <input type="submit" name="submit">
    </form>