@extends('layouts.main_layout')

@section('content')
    <form method="POST" action="{{route('thing.add')}}">
        @csrf
        <input type="text" name="name">
        <input type="number" name='a_number'>
        <input type="date" name="a_date">
        <input type="number" name="price">
        <input type="submit" value="create">
    </form>
@endsection