<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use Notifiable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'leads';

    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'placeoflife',
        'dealer',
        'information_processing'
    ];

    /**
     * Typecasted dates.
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * Typecasting is awesome.
     *
     * @var array
     */
    protected $casts = [
        'firstname'                 => 'string',
        'lastname'                  => 'string',
        'email'                     => 'string',
        'phone'                     => 'string',
        'placeoflife'               => 'string',
        'dealer'                    => 'string',
        'information_processing'    => 'string'
    ];
}
