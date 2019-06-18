<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'attendees',
        'info',
        'type',
        'venue_id',
        'presale',
        'presale_name',
        'presale_start',
        'presale_end',
        'presale_price',
        'public_start',
        'public_end',
        'public_price',
        'start_date',
        'genre_id',
        'max_order_quantity',
        'cover_photo',
    ];

    /**
     * Get the venue associated with the event.
     */
    public function venue()
    {
        return $this->hasOne('App\Venue');
    }
}
