@extends('layouts.mainuser')
@section('title', 'Homepage - User')

@section('content')
    <img src="{{asset($detailEvent->poster)}}" alt="" width="30%" height="30%"> <br>
    {{$detailEvent->eventname}} <br>
    <h2>Start Date</h2>{{$detailEvent->startdate}} <br>
    <h2>End Date</h2>{{$detailEvent->enddate}} <br>
    <h2>Single Pass</h2>{{$detailEvent->singleprice}} <br>
    <h2>All Day Pass</h2>{{$detailEvent->alldayprice}}  <br>
    <h2>About</h2>{{$detailEvent->description}} <br>
@endsection
