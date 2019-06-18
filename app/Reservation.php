<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reservations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'event_id',
        'quantity',
    ];

    /**
     * Get the tickets for the reservation.
     */
    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }
}
