@extends('layouts.app')

@section('content')

    <form method="post" action="/words">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <input type="text" name="name" placeholder="Enter Word Name" >
        <input type="text" name="def" placeholder="Enter Definition" >
        <input type="text" name="sentence_ex" placeholder="Enter Sentence Example" >
        <input type="text" name="tags" placeholder="Tags">

        <input type="submit" name="submit">
    </form>