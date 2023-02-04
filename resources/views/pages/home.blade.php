@extends('layouts.main_layout')

@section('content')
    <div><a href="{{route('thing.create')}}">Nuova cosa</a></div>
    <ul>
        @foreach ($things as $thing)
        <li>
            <a href="{{route('thing.show', ['id'=>$thing->id])}}">{{$thing->name}}  {{$thing->a_date}}  {{$thing->a_number}}  {{$thing->price}}</a>
            &nbsp;
            <a href="{{route('thing.delete', ['id'=>$thing->id])}}">X</a>    
        </li>
        @endforeach
    </ul>
@endsection