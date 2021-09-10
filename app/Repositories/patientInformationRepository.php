<?php

namespace App\Repositories;

use App\Models\patientInformation;
use App\Repositories\BaseRepository;

/**
 * Class patientInformationRepository
 * @package App\Repositories
 * @version September 10, 2021, 6:25 am UTC
*/

class patientInformationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'dateOfAdmission',
        'timeOfAdmission',
        'hospitalName',
        'age',
        'pincode',
        'name',
        'dateOfBirth',
        'gender',
        'registerNumber',
        'proposedOperation',
        'preOperativeDiagnosis',
        'BP',
        'HR',
        'sao2',
        'height',
        'weight',
        'BMI',
        'ASAPhysicalStatus',
        'isemergency',
        'allergies',
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
