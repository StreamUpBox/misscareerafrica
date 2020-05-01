<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class candiateVoter
 * @package App\Models
 * @version December 10, 2019, 6:53 pm UTC
 *
 * @property string phone_number
 * @property integer candiateId
 */
class candiateVoter extends Model
{

    public $table = 'candidate_votes';
    

    public $fillable = [
        'phone_number',
        'candidate_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'candidate_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'phone_number'=>'required'
    ];

    public function candidate(){

        return $this->belongsTo('App\Models\Candidate','candidate_id'); 
    }
}
