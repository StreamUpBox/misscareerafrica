<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Crowned
 * @package App\Models
 * @version May 1, 2020, 6:47 am UTC
 *
 * @property string title
 * @property string bio
 * @property string image
 * @property integer position
 * @property string award
 * @property string session
 * @property boolean published
 */
class Crowned extends Model
{

    public $table = 'crowned';
    


    public $fillable = [
        'title',
        'bio',
        'image',
        'position',
        'award',
        'session',
        'published'
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
        'position' => 'integer',
        'published' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'bio' => 'required',
        'position' => 'required',
        'award' => 'required',
        'session' => 'required',
        'published' => 'required'
    ];

    
}
