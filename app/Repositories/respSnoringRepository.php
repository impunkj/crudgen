<?php

namespace App\Repositories;

use App\Models\respSnoring;
use App\Repositories\BaseRepository;

/**
 * Class respSnoringRepository
 * @package App\Repositories
 * @version September 23, 2021, 4:44 am UTC
*/

class respSnoringRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'stopBangScore',
        'sleepStudy',
        'cpap',
        'OSAW',
        'duFSleep'
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
        return respSnoring::class;
    }
}
