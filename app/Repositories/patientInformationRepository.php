<?php

namespace App\Repositories;

use App\Models\patientInformation;
use App\Repositories\BaseRepository;

/**
 * Class patientInformationRepository
 * @package App\Repositories
 * @version August 25, 2021, 4:10 pm UTC
*/

class patientInformationRepository extends BaseRepository
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
        return patientInformation::class;
    }
}
