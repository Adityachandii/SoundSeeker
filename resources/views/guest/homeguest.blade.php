@extends('layouts.mainguest')
@section('title', 'Homepage - User')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <img src="image/iklan.png" alt="" width="80%" height="30%" >
    </div>
    <div class="mx-5">
        <H3>EVENT</H3>
    </div>
    <div class="d-flex justify-content-between align-items-center mt-3 mx-5 my-3 p-3 rounded">
        @foreach ($allEventGuest as $event)
        <div class="text-center mt-3 p-5 rounded" style="border: 3px solid black; background-color: #F3F3F3">
                <img src="{{asset($event->poster)}}" alt="" width="200px" height="200px"><br>
                <h5>{{$event->eventname}}</h5>
                {{$event->startdate}} <br>
                <div class="dropdown-divider bg-black"></div>
                Rp. {{number_format($event->singleprice)}} <br>
            </div>
        @endforeach
    </div>
@endsection
