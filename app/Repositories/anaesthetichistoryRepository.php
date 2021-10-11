<?php

namespace App\Repositories;

use App\Models\anaesthetichistory;
use App\Repositories\BaseRepository;

/**
 * Class anaesthetichistoryRepository
 * @package App\Repositories
 * @version October 11, 2021, 9:02 am UTC
*/

class anaesthetichistoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'typeOf',
        'preAnaesthHistory',
        'physicalExam'
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
        return anaesthetichistory::class;
    }
}
