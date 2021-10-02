<?php

namespace App\Repositories;

use App\Models\renalFailure;
use App\Repositories\BaseRepository;

/**
 * Class renalFailureRepository
 * @package App\Repositories
 * @version October 2, 2021, 2:59 pm UTC
*/

class renalFailureRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'urea',
        'creatinine',
        'dialysis',
        'hemo',
        'hemoValue',
        'peritoneal',
        'peritonealValue',
        'fistual',
        'fistualValue'
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
        return renalFailure::class;
    }
}
