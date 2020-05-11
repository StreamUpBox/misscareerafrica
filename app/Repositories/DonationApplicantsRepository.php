<?php

namespace App\Repositories;

use App\Models\DonationApplicants;
use App\Repositories\BaseRepository;

/**
 * Class DonationApplicantsRepository
 * @package App\Repositories
 * @version May 11, 2020, 11:40 am UTC
*/

class DonationApplicantsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        'donation_session_id'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return DonationApplicants::class;
    }
}
