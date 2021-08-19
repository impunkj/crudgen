<?php

namespace App\Repositories;

use App\Models\Events;
use App\Repositories\BaseRepository;

/**
 * Class EventsRepository
 * @package App\Repositories
 * @version August 16, 2021, 5:38 pm UTC
*/

class EventsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
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
        return Events::class;
    }
}
