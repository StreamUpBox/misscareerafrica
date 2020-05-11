<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DonationApplicants
 * @package App\Models
 * @version May 11, 2020, 11:40 am UTC
 *
 * @property string full_name
 * @property string email
 * @property string phone_number
 * @property string q1
 * @property string q2
 * @property string q3
 * @property string q4
 * @property string q5
 * @property string q6
 * @property string q7
 * @property boolean allowed_dantion
 * @property string attach_business_plan
 * @property string upload_your_profile_picture
 * @property integer donation_session_id
 */
class DonationApplicants extends Model
{

    public $table = 'donation_applicants';
    


    public $fillable = [
        'full_name',
        'email',
        'phone_number',
        'q1',
        'q2',
        'q3',
        'q4',
        'q5',
        'q6',
        'q7',
        'allowed_dantion',
        'attach_business_plan',
        'upload_your_profile_picture',
        'donation_session_id',
        'bio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'full_name' => 'string',
        'email' => 'string',
        'phone_number' => 'string',
        'allowed_dantion' => 'boolean',
        'attach_business_plan' => 'string',
        'upload_your_profile_picture' => 'string',
        'donation_session_id' => 'integer',
        'bio'=>'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
