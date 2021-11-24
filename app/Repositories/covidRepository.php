<?php

namespace App\Repositories;

use App\Models\covid;
use App\Repositories\BaseRepository;

/**
 * Class covidRepository
 * @package App\Repositories
 * @version November 23, 2021, 5:06 am UTC
*/

class covidRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'whyy',
        'whmm',
        'whdd',
        'wherePlace',
        'treatment',
        'resp',
        'cvs',
        'renal',
        'anticoafungal',
        'vaccinated'
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
        return covid::class;
    }
}
