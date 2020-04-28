<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Candidate
 * @package App\Models
 * @version September 27, 2019, 12:00 am UTC
 *
 * @property string fname
 * @property string lname
 * @property string email
 * @property string dob
 * @property string phone_code
 * @property string phone_number
 * @property string street
 * @property string city
 * @property string province
 * @property string country
 * @property string level_education
 * @property string former_school_attended
 * @property string education_background
 * @property string current_occupation
 * @property string q1
 * @property string q2
 * @property string q3
 * @property string q4
 * @property string q5
 * @property string q6
 * @property string q7
 * @property integer session_id
 * @property integer is_selected
 */
class Candidate extends Model
{

    public $table = 'candidates';



    public $fillable = [
        'fname',
        'lname',
        'email',
        'dob',
        'phone_code',
        'phone_number',
        'street',
        'city',
        'province',
        'country',
        'level_education',
        'former_school_attended',
        'education_background',
        'current_occupation',
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'q6',
        'q7',
        'session_id',
        'is_selected',
        'votes',
        'profile',
        'bio'
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
        'email' => 'string',
        'dob' => 'date',
        'phone_code' => 'string',
        'phone_number' => 'string',
        'street' => 'string',
        'city' => 'string',
        'province' => 'string',
        'country' => 'string',
        'level_education' => 'string',
        'former_school_attended' => 'string',
        'education_background' => 'string',
        'current_occupation' => 'string',
        'session_id' => 'integer',
        'votes' => 'integer',
        'is_selected' => 'integer','bio'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
    public function getDobAttribute($value)
    {
        return date('j F, Y', strtotime($value));
    }

}
