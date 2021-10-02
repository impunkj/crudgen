<?php

namespace App\Repositories;

use App\Models\steroid;
use App\Repositories\BaseRepository;

/**
 * Class steroidRepository
 * @package App\Repositories
 * @version October 2, 2021, 6:30 pm UTC
*/

class steroidRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'supplement'
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
        return steroid::class;
    }
}
