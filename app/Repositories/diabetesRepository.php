<?php

namespace App\Repositories;

use App\Models\diabetes;
use App\Repositories\BaseRepository;

/**
 * Class diabetesRepository
 * @package App\Repositories
 * @version October 2, 2021, 4:33 pm UTC
*/

class diabetesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'typeOfD',
        'sugarCheckHome',
        'howmuch',
        'whatTreatment',
        'rxtreat',
        'complications',
        'dietcontrol'
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
        return diabetes::class;
    }
}
