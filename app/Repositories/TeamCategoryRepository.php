<?php

namespace App\Repositories;

use App\Models\TeamCategory;
use App\Repositories\BaseRepository;

/**
 * Class TeamCategoryRepository
 * @package App\Repositories
 * @version June 10, 2020, 10:29 am UTC
*/

class TeamCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
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
        return TeamCategory::class;
    }
}
