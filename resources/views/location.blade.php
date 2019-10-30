@extends('layouts.front')
@section('content')
<div class="site-section site-section-sm bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <div class="site-section-title">
                    <h2>Venues for {{ $location->name }}</h2>
                </div>
            </div>
        </div>
        <div class="row mb-5">
                     @foreach(  $venues  as $venue)
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
        {{ $venues->links() }}
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
