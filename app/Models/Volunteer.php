<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Volunteer
 * @package App\Models
 * @version September 27, 2019, 10:32 am UTC
 *
 * @property string fname
 * @property string lname
 * @property string country
 * @property string phone_number
 * @property string street
 * @property string city
 * @property string province
 * @property string areas_of_help
 */
class Volunteer extends Model
{

    public $table = 'volunteers';
    


    public $fillable = [
        'fname',
        'lname',
        'country',
        'phone_number',
        'street',
        'city',
        'province',
        'areas_of_help',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fname' => 'string',
        'lname' => 'string',
        'country' => 'string',
        'phone_number' => 'string',
        'street' => 'string',
        'city' => 'string',
        'province' => 'string',
        'areas_of_help' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email'=>'required',
        'phone_number'=> 'required'
    ];

    
    
}
