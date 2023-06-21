@extends('layouts.mainguest')
@section('title', 'Homepage - User')

@section('content')
    <div class="d-flex justify-content-center mt-3">
        <img src="image/iklan.png" alt="" width="80%" height="30%">
    </div>
    <div class="mx-5">
        <H3>EVENT</H3>
    </div>
    <div class="d-flex justify-content-between align-items-center mt-3 mx-5 my-3 p-3 rounded">
        @foreach ($allEventGuest as $event)
            {{-- style="border: 3px solid black; background-color: #F3F3F3" --}}
            <div class="card text-center mt-3 rounded"; style="background-color: #99DBF5">
                <img src="{{ asset($event->poster) }}" alt="" width="300px" height="300px"><br>
                <div class="blockquote p-1">
                    <h4>{{ $event->eventname }}</h4>
                    {{\Carbon\Carbon::parse($event->startdate)->format('d F Y')}} <br> s/d <br>{{\Carbon\Carbon::parse($event->enddate)->format('d F Y')}} <br>
                    <div class="dropdown-divider bg-black"></div>
                    Rp. {{ number_format($event->singleprice) }} <br>
                </div>
            </div>
        @endforeach
    </div>
@endsection
