<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Content
 * @package App\Models
 * @version June 5, 2020, 9:39 pm UTC
 *
 * @property string type
 * @property string title
 * @property string image
 * @property string content
 * @property boolean published
 */
class Content extends Model
{

    public $table = 'Contents';
    


    public $fillable = [
        'type',
        'title',
        'image',
        'content',
        'published'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'title' => 'string',
        'image' => 'string',
        'published' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'required',
        'title' => 'required',
        'image' => 'required',
        'content' => 'required',
        'published' => 'required'
    ];

    
}
