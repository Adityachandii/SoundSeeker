@extends('layouts.mainuser')
@section('title', 'Detail Event - User')

@section('content')
    <div class="d-flex justify-content-center mt-3 mb-3">
        <div class="mx-5 my-5">
            <img src="{{asset($detailEvent->poster)}}" alt="" width="400px" height="500px" class="rounded"> <br>
        </div>
        <div class="mx-5 my-5">
            <div class="text-center ">
                <h1>{{$detailEvent->eventname}}</h1> <br>
            </div>
            <div class="d-flex justify-content-between">
                <div class="">
                    <h2>Start Date</h2>
                </div>
                <div class="mx-5">
                    <h2>{{$detailEvent->startdate}}</h2> <br>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="">
                    <h2>End Date</h2>
                </div>
                <div class="mx-5">
                    <h2>{{$detailEvent->enddate}}</h2> <br>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="">
                    <h2>Single Pass</h2>
                </div>
                <div class="mx-5">
                    <h2>Rp. {{number_format($detailEvent->singleprice)}}</h2> <br>
                </div>
            </div>
            {{-- <div class="d-flex justify-content-between">
                <div class="">
                    <h2>All Day Pass</h2>
                </div>
                <div class="mx-5">
                    <h2>Rp. {{number_format($detailEvent->alldayprice)}}</h2> <br>
                </div>
            </div> --}}
            <div class="d-flex justify-content-between">
                <div class="">
                    <h2>About</h2>
                </div>
                <div class="mx-5 mt-1">
                    <h4>{{$detailEvent->description}}</h4> <br>
                </div>
            </div>
            <form action={{route('pushTransaction')}} method="POST">
                @csrf
                <input type="hidden" value={{Auth::user()->id}} name="userid">
                <input type="hidden" value={{$detailEvent->id}} name="eventid">
                <input type="date" min={{$detailEvent->startdate}} max={{$detailEvent->enddate}}>
                <button type="submit" class="btn btn-warning ml-4">Buy Event</button>
            </form>
        </div>
    </div>
@endsection
