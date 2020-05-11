<?php

namespace App\Repositories;

use App\Models\DonateSessions;
use App\Repositories\BaseRepository;

/**
 * Class DonateSessionsRepository
 * @package App\Repositories
 * @version May 11, 2020, 11:34 am UTC
*/

class DonateSessionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'image',
        'description',
        'can_open_donation_system',
        'can_start_application_system'
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
        return DonateSessions::class;
    }
}
