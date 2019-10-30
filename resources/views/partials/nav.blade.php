<div class="site-navbar">
    <div class="container py-1">
        <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
                <h1 class=""><a href="/" class="h5 text-uppercase text-black"><strong>{{ config('app.name') }}<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
                <nav class="site-navigation text-right text-md-right" role="navigation">

                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                        <li class="has-children">
                            <a href="/">Locations</a>
                            <ul class="dropdown">
                                @foreach($globalLocation as $location)
                                    <li><a href="{{ route('location', $location->slug) }}">{{ $location->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="/">Event Types</a>
                            <ul class="dropdown">
                                @foreach($globalEventTypes as $eventType)
                                    <li><a href="{{ route('event_type', $eventType->slug) }}">{{ $eventType->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>


        </div>
    </div>
</div>
