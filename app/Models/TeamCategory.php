<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TeamCategory
 * @package App\Models
 * @version June 10, 2020, 10:29 am UTC
 *
 * @property string name
 * @property boolean published
 */
class TeamCategory extends Model
{

    public $table = 'team_categories';
    


    public $fillable = [
        'name',
        'published','numbering'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'published' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
