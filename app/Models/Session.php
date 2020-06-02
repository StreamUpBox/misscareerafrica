<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Session
 * @package App\Models
 * @version September 26, 2019, 11:22 pm UTC
 *
 * @property string title
 * @property string session
 * @property string country
 * @property string date
 * @property string image
 * @property integer numbering
 * @property boolean is_current_applying
 */
class Session extends Model
{

    public $table = 'sessions';



    public $fillable = [
        'title',
        'session',
        'country',
        'date',
        'image',
        'numbering',
        'is_current_applying',
        'is_voting_open',
        'view_past_candidate', 
        'final_selected'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'session' => 'string',
        'country' => 'string',
        'date' => 'string',
        'image' => 'string',
        'numbering' => 'integer',
        'is_current_applying' => 'boolean',
        'is_voting_open'=>'boolean',
        'view_past_candidate'=>'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
