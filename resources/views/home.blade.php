@extends('layouts.front')
@section('content')
{{--    front-end/images/hero_bg_1.jpg--}}
<div class="slide-one-item home-slider owl-carousel">
       @foreach( $featuredVenues  as  $featuredVenue)
        <div class="site-blocks-cover" style="background-image: url({{ $featuredVenue->getFirstMediaUrl('main_photo') }});" data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="text">
                <h2>{{ $featuredVenue->name }}</h2>
                <p class="location"><span class="property-icon icon-room"></span> {{$featuredVenue->address}}</p>
                <p class="mb-2"><strong>{{  number_format($featuredVenue->price_per_hour) }}</strong></p>
                <p class="mb-0"><a href="{{  route('venues.show',[$featuredVenue->slug, $featuredVenue->id] ) }}" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>
            </div>
        </div>
       @endforeach
    </div>

{{--    Seacrch --}}
<div class="py-5">
    <div class="container">
        <form class="row mb-5" action="{{ route('search') }}" method="get">

            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <span class="icon icon-arrow_drop_down"></span>
                    <select name="venue_type" id="venue_type" class="form-control d-block rounded-0">
                        <option value="">Venue Type</option>
                        @foreach($eventTypes as $eventType)
                            <option value="{{ $eventType->id  }}">{{  $eventType->name }}</option>
                         @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
{{--                    <span class="icon icon-arrow_drop_down"></span>--}}
                    <input type="number" name="people_amount" id="people_amount"  min="1" class="form-control d-block rounded-0" placeholder="people amount">
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="select-wrap">
                    <span class="icon icon-arrow_drop_down"></span>
                    <select name="location" id="location" class="form-control d-block rounded-0" >
                        <option value="">Location Type</option>
                        @foreach($locations as $location)
                            <option value="{{$location->id}}">{{ $location->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <input type="submit" class="btn btn-primary btn-block form-control-same-height rounded-0" value="Search">
            </div>

        </form>

        <div class="row justify-content-center">
            <div class="col-md-7 text-center mb-5">
                <div class="site-section-title">
                    <h2>Inspiring Venue for ....</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($eventTypes as $eventType)
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="{{ route('event_type', $eventType->slug) }}" class="service text-center border rounded">
                        <span class="icon flaticon-house"></span>
                        <h2 class="service-heading">{{ $eventType->name }}</h2>
                        <p><span class="read-more">Learn More</span></p>
                    </a>
                </div>
            @endforeach
        </div>
</div>
</div>

<div class="site-section site-section-sm bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="site-section-title">
                    <h2>New Venues for u</h2>
                </div>
            </div>
        </div>
        <div class="row mb-5">
                     @foreach( $newestVenues  as $venue)
                <div class="col-md-6 col-lg-4 mb-4">
                    <a href="{{ route('venues.show',[$venue->slug, $venue->id]) }}" class="prop-entry d-block">
                        <figure>
                            <img src="{{ $venue->getFirstMediaUrl('main_photo','big_thumb') }}" alt="{{ $venue->name }}" class="img-fluid">
{{--                            <img src="{{ asset('front-end/images/img_1.jpg') }}" alt="Image" class="img-fluid">--}}
                        </figure>
                        <div class="prop-text">
                            <div class="inner">
                                <span class="price rounded">{{ $venue->price_per_hour }}</span>
                                <h3 class="title">{{ $venue->name }}</h3>
                                <p class="location">{{ $venue->address }}</p>
                            </div>
                            <div class="prop-more-info">
                                <div class="inner d-flex">
                                    <div class="col">
                                        <span>Event Types</span>
                                        <strong>{{implode(', ',$venue->event_types->pluck('name')->toArray() )  }}</strong>
                                    </div>
                                    <div class="col">
                                        <span>Number of People</span>
                                        <strong>{{ $venue->people_minimum }} - {{ $venue->people_maximum }}}</strong>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                      @endforeach
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-md-7">
                <div class="site-section-title text-center">
                    <h2>Discover Spaces In  ....</h2>
                </div>
            </div>
        </div>
        <div class="row block-13">

            <div class="nonloop-block-13 owl-carousel">
              @foreach($locations as $location )
                    <div class="slide-item">
                        <div class="team-member text-center">
                            <a href="{{ route('location' ,$location->slug) }}">
                                 <img src="{{ $location->getFirstMediaUrl('photo') }}" alt="{{ $location->name }}Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
                            </a>
                            <div class="text p-3">
                                <a href="{{ route('location',$location->slug) }}">
                                <h2 class="mb-2 font-weight-light text-black h4">{{ $location->name }}</h2>
                                </a>
{{--                                <span class="d-block mb-3 text-white-opacity-05">Real Estate Agent</span>--}}
{{--                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. </p>--}}
{{--                                <p>--}}
{{--                                    <a href="#" class="text-black p-2"><span class="icon-facebook"></span></a>--}}
{{--                                    <a href="#" class="text-black p-2"><span class="icon-twitter"></span></a>--}}
{{--                                    <a href="#" class="text-black p-2"><span class="icon-linkedin"></span></a>--}}
{{--                                </p>--}}
                            </div>
                        </div>
                    </div>
                 @endforeach

            </div>

        </div>
    </div>
</div>
@endsection






























































{{--<div class="site-blocks-cover" style="background-image: url(front-end/images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">--}}

{{--    <div class="text">--}}
{{--        <h2>625 S. Berendo St</h2>--}}
{{--        <p class="location"><span class="property-icon icon-room"></span>607 Los Angeles, CA 90005</p>--}}
{{--        <p class="mb-2"><strong>$2,250,500</strong></p>--}}


{{--        <p class="mb-0"><a href="#" class="text-uppercase small letter-spacing-1 font-weight-bold">More Details</a></p>--}}

{{--    </div>--}}

{{--</div>--}}
