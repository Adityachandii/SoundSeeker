@extends('layouts.mainuser')
@section('title', 'Homepage - User')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <img src="image/iklan.png" alt="" width="80%" height="30%" >
    </div>
    <div class="mx-5 mb-3">
        <H3>EVENT</H3>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        @foreach ($allEvent as $event)
            <div class="text-center mt-3 mx-5 my-3 p-5 rounded" style="border: 3px solid black; background-color: #F3F3F3">
                <a href={{route('DetailEventUser',['id'=> $event->id])}}>
                    <img src="{{asset($event->poster)}}" alt="" width="200px" height="200px" class="rounded"><br>
                </a>
                <h5>{{$event->eventname}}</h5>
                {{$event->startdate}} s/d {{$event->enddate}} <br>
                <div class="dropdown-divider bg-black"></div>
                <h3>
                    Rp. {{number_format($event->singleprice)}} <br>
                </h3>
            </div>
        @endforeach
    </div>
@endsection
