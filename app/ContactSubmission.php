<?php

namespace App;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{

    use HasUUID;

    protected $fillable = [
        'uuid',
        'name',
        'email',
        'message',
    ];
}
