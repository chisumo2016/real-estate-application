<?php

namespace App\Http\Controllers;

use App\EventType;
use App\Venue;
use Illuminate\Http\Request;

class EventTypesController extends Controller
{
    public  function  index($slug)
    {
        $eventType = EventType::where('slug',$slug)->firstOrFail();
        $venues = Venue::with('event_types')
            ->whereHas('event_types',function ($q) use ($slug){
                $q->where('event_types.slug', $slug);
            })
            ->latest()
            ->paginate(3);

        return view('event_type', compact('venues','eventType'));
    }
}
