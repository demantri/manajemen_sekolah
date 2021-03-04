<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index()
    {

        $data = Event::all();
        // dd($data);
        return view('event.calendar', compact('data'));
    }

    // public function data()
    // {
    //     $agenda = Event::all();
    //     return response()->json();
    // }

}
