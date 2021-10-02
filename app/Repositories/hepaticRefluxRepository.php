<?php

namespace App\Repositories;

use App\Models\hepaticReflux;
use App\Repositories\BaseRepository;

/**
 * Class hepaticRefluxRepository
 * @package App\Repositories
 * @version October 2, 2021, 6:11 pm UTC
*/

class hepaticRefluxRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'reflux'
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
        return hepaticReflux::class;
    }
}
