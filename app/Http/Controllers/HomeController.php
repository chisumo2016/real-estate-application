<?php

namespace App\Http\Controllers;

use App\EventType;
use App\Location;
use App\Venue;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $featuredVenues = [
            [
                'hero_image'  => 'front-end/images/hero_bg_1.jpg',
                'name'  => '853 S Lucerne Blvd',
                'address'  => 'Los Angeles, CA 90005',
                'price'  => '£2,250,100',
                'link'  => '#',
            ],
            [
                'hero_image'  => 'front-end/images/hero_bg_3.jpg',
                'name'  => '625 S. Berendo St',
                'address'  => '607 Los Angeles, CA 90005',
                'price'  => '£,300,100',
                'link'  => '#',
            ],

        ];
        $featuredVenues = Venue::where('is_featured', 1)->get();
        $eventTypes  = EventType::all();
        $locations   = Location::all();
        $newestVenues = Venue::with('event_types')->latest()->take(3)->get();
        return view('home', compact('featuredVenues','eventTypes','locations','newestVenues'));
    }


    public  function  testMe()
    {
        $locations   = Location::all();

        return   $locations;
    }
}
