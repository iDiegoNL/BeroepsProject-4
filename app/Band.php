<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bands';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'bio',
        'genre_ids',
        'members',
        'email',
        'website',
        'spotify_link',
        'soundcloud_link',
        'post_access',
        'edit_access',
        'admin_access',
    ];
}
