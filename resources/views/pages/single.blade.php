@extends('layouts.main_layout')

@section('content')
    <h1><a href="{{route('home')}}">{{$thing->name}}</a></h1>
@endsection