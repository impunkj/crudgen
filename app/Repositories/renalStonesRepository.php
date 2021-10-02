<?php

namespace App\Repositories;

use App\Models\renalStones;
use App\Repositories\BaseRepository;

/**
 * Class renalStonesRepository
 * @package App\Repositories
 * @version September 23, 2021, 9:11 am UTC
*/

class renalStonesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'SurgeryNeeded',
        'status',
        'whatSurgery'
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
        return renalStones::class;
    }
}
