<?php

namespace App\Repositories;

use App\Models\thyroid;
use App\Repositories\BaseRepository;

/**
 * Class thyroidRepository
 * @package App\Repositories
 * @version October 2, 2021, 6:21 pm UTC
*/

class thyroidRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'typeOf',
        'whatTreatment'
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
        return thyroid::class;
    }
}
