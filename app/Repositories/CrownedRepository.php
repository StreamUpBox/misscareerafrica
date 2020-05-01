<?php

namespace App\Repositories;

use App\Models\Crowned;
use App\Repositories\BaseRepository;

/**
 * Class CrownedRepository
 * @package App\Repositories
 * @version May 1, 2020, 6:47 am UTC
*/

class CrownedRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'bio',
        'image',
        'position',
        'award',
        'session',
        'published'
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
        return Crowned::class;
    }
}
