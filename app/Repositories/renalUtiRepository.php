<?php

namespace App\Repositories;

use App\Models\renalUti;
use App\Repositories\BaseRepository;

/**
 * Class renalUtiRepository
 * @package App\Repositories
 * @version October 2, 2021, 3:01 pm UTC
*/

class renalUtiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'whyy',
        'whmm',
        'whdd',
        'treatedV',
        'treated',
        'cue',
        'whatdrugs'
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
        return renalUti::class;
    }
}
