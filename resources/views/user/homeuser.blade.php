@extends('layouts.mainuser')
@section('title', 'Homepage - User')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <img src="image/iklan.png" alt="" width="80%" height="30%" >
    </div>
    <div class="mx-5">
        <H4>EVENT</H4>
    </div>
    <div class="d-flex justify-content-between align-items-center">
        @foreach ($allEvent as $event)
            <div class="card text-center mx-5 my-5 rounded"; style="background-color: #C2DEDC">
                <a href={{route('DetailEventUser',['id'=> $event->id])}}>
                    <img src="{{asset($event->poster)}}" alt="" width="300px" height="300px"><br>
                </a>
                <div class="blockquote p-1">
                    <h4>{{$event->eventname}}</h4>
                    {{-- {{$event->startdate}} s/d {{$event->enddate}} <br> --}}
                    {{\Carbon\Carbon::parse($event->startdate)->format('d F Y')}} <br> s/d <br>{{\Carbon\Carbon::parse($event->enddate)->format('d F Y')}} <br>
                    <div class="dropdown-divider bg-black"></div>
                    <h3>
                        Rp. {{number_format($event->singleprice)}} <br>
                    </h3>
                </div>
            </div>
        @endforeach
    </div>
@endsection
