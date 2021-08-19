<?php

namespace App\Repositories;

use App\Models\patientInformations;
use App\Repositories\BaseRepository;

/**
 * Class patientInformationsRepository
 * @package App\Repositories
 * @version August 17, 2021, 9:28 am UTC
*/

class patientInformationsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dateOfAdmission',
        'timeOfAdmission',
        'name',
        'dateOfBirth',
        'gender',
        'IP',
        'proposedOperation',
        'preOperativeDiagnosis',
        'BP',
        'HR',
        'sao2',
        'height',
        'weight',
        'BMI',
        'ASAPhysicalStatus',
        'status'
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
        return patientInformations::class;
    }
}
