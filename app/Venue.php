<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'venues';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'type',
        'capacity',
        'postal_code',
        'city',
        'country',
        'timezone',
        'address',
        'cover_photo',
    ];

    /**
     * Get the events for the venue.
     */
    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
