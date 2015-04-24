@extends('layout')

@section('content')
<h1> Test Poop </h1>

@if ($first == 'Chase')
<h3>Hello {{$first}} {{$last}}</h3>
@else
<h3>Who are you?</h3>
@endif
@stop