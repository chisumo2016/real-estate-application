<?php

namespace App\Http\Controllers;

use App\EventType;
use App\Location;
use App\Venue;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public  function  index($slug)
    {
        $location = Location::where('slug',$slug)->firstOrFail();
        $venues = Venue::with('event_types')
            ->where('location_id',$location->id)
            ->latest()
            ->paginate(3);

        return view('location', compact('venues','location'));
    }
}
