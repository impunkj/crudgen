<?php

namespace App\Repositories;

use App\Models\frality;
use App\Repositories\BaseRepository;

/**
 * Class fralityRepository
 * @package App\Repositories
 * @version November 24, 2021, 10:53 am UTC
*/

class fralityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'Ssteroid',
        'sterioid',
        'frailityscore',
        'cognition',
        'ghstatus',
        'describehealth',
        'findependence',
        'socialSupport',
        'medicationusefive',
        'medicationuseprescription',
        'Nutrition',
        'Mood',
        'Continence',
        'Functionalperformance',
        'Totals'
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
        return frality::class;
    }
}
