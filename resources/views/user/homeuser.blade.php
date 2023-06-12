@extends('layouts.mainuser')
@section('title', 'Homepage - User')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <img src="image/iklan.jpg" alt="" width="80%" height="30%" >
    </div>
    <div class="mx-5 mb-3">
        <H3>EVENT</H3>
    </div>
    <div class="d-flex justify-content-between">
        @foreach ($allEvent as $event)
            <div class="text-center px-5 pb-2">
                <a href={{route('DetailEventUser',['id'=> $event->id])}}>
                    <img src="{{asset($event->poster)}}" alt="" width="200px" height="200px" class="rounded"><br>
                </a>
                <h5>{{$event->eventname}}</h5>
                {{$event->startdate}} s/d {{$event->enddate}} <br>
                <h3>
                    Rp. {{number_format($event->singleprice)}} <br>
                </h3>
            </div>
        @endforeach
    </div>
@endsection
