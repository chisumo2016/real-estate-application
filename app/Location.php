<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Location extends Model implements  HasMedia
{
    use HasMediaTrait;

    public $table = 'locations';

    protected  $appends = [
        'photo',
    ];

    protected  $dates  =[
        'created_at',
        'updated_at',
    ];

    protected  $fillable =[
        'name',
        'slug',
        'created_at',
        'updated_at',
    ];

    public function  venues()
    {
        return $this->hasMany(Venue::class, 'location_id', 'id');
    }

    public  function registerMediaCollections(Media  $media = null)
    {
        $this->addMediaConversion('thumb')->width(50)->height(50);
    }

    public function  getPhotoAttribute()
    {
        $file = $this->getMedia('photo')->last();
        if ($file){
            $file->url    =  $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
        }
        return $file;
    }


}
