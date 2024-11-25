@extends('layouts.main')
@section('content')
    @foreach ($cards as $card)
    <p class="test">{{$card['id']}}</p>
    <img src="{{$card['path']}}" alt="{{$card['title']}}" width="100px">

    @endforeach
@endsection