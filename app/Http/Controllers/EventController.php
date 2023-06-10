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

    public function showAllEventGuest(){
        $allEventGuest = Event::All();
        return view('guest.homeguest', compact('allEventGuest'));
    }

    //Event << khusus user
    public function showDetailEvent($id){
        $detailEvent = Event::where('id', '=', $id)->first();
        return view('user.eventdetail', compact('detailEvent'));
    }
}
