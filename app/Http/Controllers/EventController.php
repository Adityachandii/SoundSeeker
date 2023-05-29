<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //Event
    public function showAllEvent(){
        $allEvent = Event::All();
        return view('user.homeuser', compact('allEvent'));
    }

    //Event << khusus user
    public function showDetailEvent($id){
        $detailEvent = Event::where('id', '=', $id)->first();
        return view('user.eventdetail', compact('detailEvent'));
    }
}
