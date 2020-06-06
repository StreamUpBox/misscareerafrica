<?php

namespace App\Repositories;

use App\Models\Content;
use App\Repositories\BaseRepository;

/**
 * Class ContentRepository
 * @package App\Repositories
 * @version June 5, 2020, 9:39 pm UTC
*/

class ContentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'title',
        'image',
        'content',
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
        return Content::class;
    }
}
