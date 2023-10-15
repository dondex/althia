<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $all_events = Event::all();
        return view('frontend.index', compact('all_events'));
    }
}
