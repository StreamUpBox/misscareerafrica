<?php

namespace App\Repositories;

use App\Models\Gallaries;
use App\Repositories\BaseRepository;

/**
 * Class GallariesRepository
 * @package App\Repositories
 * @version May 1, 2020, 8:05 pm UTC
*/

class GallariesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'image'
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
        return Gallaries::class;
    }
}
