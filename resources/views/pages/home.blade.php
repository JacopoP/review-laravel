@extends('layouts.main_layout')

@section('content')
    <ul>
        @foreach ($things as $thing)
        <li>
            <a href="#">{{$thing->name}}  {{$thing->a_date}}  {{$thing->a_number}}  {{$thing->price}}</a>    
        </li>
        @endforeach
    </ul>
@endsection