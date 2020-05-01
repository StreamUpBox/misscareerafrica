<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Gallaries
 * @package App\Models
 * @version May 1, 2020, 8:05 pm UTC
 *
 * @property string name
 * @property string image
 */
class Gallaries extends Model
{

    public $table = 'gallaries';
    


    public $fillable = [
        'name',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'image' => 'required'
    ];

    
}
