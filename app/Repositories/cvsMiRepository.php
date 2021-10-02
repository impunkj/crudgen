<?php

namespace App\Repositories;

use App\Models\cvsMi;
use App\Repositories\BaseRepository;

/**
 * Class cvsMiRepository
 * @package App\Repositories
 * @version September 30, 2021, 6:24 am UTC
*/

class cvsMiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'whyy',
        'whmm',
        'whdd',
        'medical',
        'stented',
        'treatMent',
        'twhyy',
        'twhmm',
        'twhdd',
        'stoppedAntiplatelet',
        'whatTreatment',
        'symptomsImproved',
        'cabg',
        'medication',
        'BStentedCABG',
        'typeofGraft',
        'repeatCag'
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
        return cvsMi::class;
    }
}
