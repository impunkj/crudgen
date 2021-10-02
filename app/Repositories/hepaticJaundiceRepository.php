<?php

namespace App\Repositories;

use App\Models\hepaticJaundice;
use App\Repositories\BaseRepository;

/**
 * Class hepaticJaundiceRepository
 * @package App\Repositories
 * @version October 2, 2021, 6:01 pm UTC
*/

class hepaticJaundiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'whyy',
        'whmm',
        'whdd',
        'needHospital',
        'cause',
        'viralStatus',
        'childCriteria',
        'INR'
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
        return hepaticJaundice::class;
    }
}
