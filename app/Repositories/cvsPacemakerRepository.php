<?php

namespace App\Repositories;

use App\Models\cvsPacemaker;
use App\Repositories\BaseRepository;

/**
 * Class cvsPacemakerRepository
 * @package App\Repositories
 * @version September 23, 2021, 3:40 am UTC
*/

class cvsPacemakerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'why',
        'pacemakerType',
        'whyy',
        'whmm',
        'whdd',
        'ckpaperwork'
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
        return cvsPacemaker::class;
    }
}
