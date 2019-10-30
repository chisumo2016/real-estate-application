<?php

use App\EventType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EventTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eventTypes = [
            'Conferences',
            'Award Ceremonies',
            'The Unusual',
            'Private Dining',
            'Christmas',
            'Meetings',
            'Parties',
        ];

        foreach ($eventTypes as $eventType){
            EventType::create([
                'name' => $eventType,
                'slug' =>Str::slug($eventType)
            ]);
        }
    }
}
