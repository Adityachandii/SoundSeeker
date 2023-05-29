@extends('layouts.mainuser')
@section('title', 'Homepage - User')

@section('content')
    @foreach ($allEvent as $event)
        <a href={{route('DetailEventUser',['id'=> $event->id])}}>
            <img src="{{asset($event->poster)}}" alt="" width="200px" height="200px"><br>
        </a>
        {{$event->eventname}} <br>
        {{$event->startdate}} <br>
        Start From Rp. {{number_format($event->singleprice)}} <br>
    @endforeach
@endsection
