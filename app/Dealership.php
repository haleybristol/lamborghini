<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dealership extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dealerships';

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
        'store_name',
        'contact_name',
        'email',
        'country',
        'address',
        'website',
        
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
        'store_name'    => 'string',
        'contact_name'  => 'string',
        'email'         => 'string',
        'country'       => 'string',
        'address'       => 'string',
        'website'       => 'string',
        
    ];

}
