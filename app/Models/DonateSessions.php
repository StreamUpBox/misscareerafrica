<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DonateSessions
 * @package App\Models
 * @version May 11, 2020, 11:34 am UTC
 *
 * @property string title
 * @property string image
 * @property string description
 * @property boolean can_open_donation_system
 * @property boolean can_start_application_system
 */
class DonateSessions extends Model
{

    public $table = 'donate_sessions';
    


    public $fillable = [
        'title',
        'image',
        'description',
        'can_open_donation_system',
        'can_start_application_system'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'image' => 'string',
        'can_open_donation_system' => 'boolean',
        'can_start_application_system' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
