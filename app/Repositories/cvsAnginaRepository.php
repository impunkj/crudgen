<?php

namespace App\Repositories;

use App\Models\cvsAngina;
use App\Repositories\BaseRepository;

/**
 * Class cvsAnginaRepository
 * @package App\Repositories
 * @version September 23, 2021, 2:52 am UTC
*/

class cvsAnginaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'status',
        'takingTreatment',
        'causeAngina',
        'howItStop',
        'dtyy',
        'dtmm',
        'dtdd',
        'created_at',
        'updated_at'
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
        return cvsAngina::class;
    }
}
