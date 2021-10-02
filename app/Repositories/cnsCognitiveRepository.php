<?php

namespace App\Repositories;

use App\Models\cnsCognitive;
use App\Repositories\BaseRepository;

/**
 * Class cnsCognitiveRepository
 * @package App\Repositories
 * @version September 23, 2021, 6:25 am UTC
*/

class cnsCognitiveRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'MiniCogScore',
        'PatientAten',
        'PharseTest'
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
        return cnsCognitive::class;
    }
}
