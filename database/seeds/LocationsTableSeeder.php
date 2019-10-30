<?php

use App\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $locations = [
               'London',
               'Manchester',
               'Liverpool',
               'Birmingham',
               'Reading',
        ];

        foreach ($locations as  $location){
            $slug = Str::slug($location);
            $locationObject = Location::create([
                'name' =>  $location,
                'slug' =>  $slug
            ]);


            $locationObject->addMediaFromUrl(config('app.url') . '/images/locations/' . $slug . '.jpg' )
                ->toMediaCollection('photo');



        }
    }
}

