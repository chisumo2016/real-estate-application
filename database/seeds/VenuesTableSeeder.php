<?php

use App\EventType;
use App\Location;
use App\Venue;
use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = Location::all();
        $eventTypes = EventType::all();
        for ($i=1; $i<=4 ; $i++){
            $venue = factory(Venue::class)->create([
                'latitude' => rand(-20, 20),
                'longitude' => rand(-20, 20),
                 'people_minimum' =>rand(1,5),
                 'people_maximum' =>rand(5,100),
                 'price_per_hour' =>rand(5,100),
                 'is_featured' =>rand(0,1),
                 'location_id' => $locations->first()->id,
                 //'location_id' => $locations->random()->first()->id,
            ]);

            //$venue->event_types()->attach($eventTypes->random()->first()->id);
            $venue->event_types()->attach($eventTypes->first()->id);
            $venue->addMediaFromUrl(config('app.url') . '/images/hero_bg_' . $venue->id . '.jpg' )
                ->toMediaCollection('main_photo');
        }
    }
}
