<?php

namespace App\Repositories;

use App\Models\cnsSurgery;
use App\Repositories\BaseRepository;

/**
 * Class cnsSurgeryRepository
 * @package App\Repositories
 * @version September 23, 2021, 6:14 am UTC
*/

class cnsSurgeryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'brain',
        'spinal',
        'brainwSurgery',
        'brainREffect',
        'spinalwSurgery',
        'spinalREffect'
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
        return cnsSurgery::class;
    }
}
