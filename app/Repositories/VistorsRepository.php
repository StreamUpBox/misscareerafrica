<?php

namespace App\Repositories;

use App\Models\Vistors;
use App\Repositories\BaseRepository;

/**
 * Class VistorsRepository
 * @package App\Repositories
 * @version May 1, 2020, 6:44 am UTC
*/

class VistorsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ip_address',
        'browser',
        'device',
        'current_location',
        'language',
        'country',
        'city',
        'state',
        'root',
        'https',
        'activity'
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
        return Vistors::class;
    }
}
