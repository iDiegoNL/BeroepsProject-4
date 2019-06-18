<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tickets';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'event_id',
        'reservation_id',
    ];

    /**
     * Get the reservation for the ticket.
     */
    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }

    /**
     * Get the event for the ticket.
     */
    public function event()
    {
        return $this->hasOne('App\Event');
    }
}
