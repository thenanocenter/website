<?php

namespace App;

use App\Support\Traits\HasSlug;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Article extends Model implements HasMedia
{

    use HasUUID;
    use HasSlug;
    use HasMediaTrait;

    protected $fillable = [
        'uuid',
        'slug',
        'title',
        'author',
        'external_url',
        'body',
    ];

    public function getPath(){
        return '/articles/'.$this->getKey();
    }

    public function registerMediaCollections()
    {
        $this
            ->addMediaCollection('featured')
            ->singleFile();
    }

}
