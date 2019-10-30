<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;


class Venue extends Model  implements  HasMedia
{
    use HasMediaTrait;

    public $table = 'venues';

    protected  $appends = [
        'gallery',
        'main_photo',
    ];

    protected  $dates  =[
        'created_at',
        'updated_at',
    ];

    protected  $fillable =[
        'name',
        'slug',
        'location_id',
        'address',
        'latitude',
        'longitude',
        'description',
        'features',
        'people_minimum',
        'people_maximum',
        'is_featured',
        'price_per_hour',

    ];


    public  function  location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }
    public  function  event_types()
    {
        return $this->belongsToMany(EventType::class);
    }

    public  function registerMediaCollections(Media  $media = null)
    {
        $this->addMediaConversion('thumb')->width(50)->height(50);
        $this->addMediaConversion('big_thumb')->width(500)->height(500);
    }

    public function  getPhotoAttribute()
    {
        $file = $this->getMedia('main_photo')->last();

        if ($file){
            $file->url    =  $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }
        return $file;
    }

    public  function getGalleryAttribute()
    {
        $files = $this->getMedia('gallery');
        $files->each(function ($item){
            $item->url      = $item->getUrl();
            $item->thumnail      = $item->getUrl('thumb');
        });
        return $files;
    }
}
