<?php

namespace App\Repositories;

use App\Models\cnsStroke;
use App\Repositories\BaseRepository;

/**
 * Class cnsStrokeRepository
 * @package App\Repositories
 * @version September 23, 2021, 5:46 am UTC
*/

class cnsStrokeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'whyy',
        'whmm',
        'whdd',
        'pStatus',
        'treatment'
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
        return cnsStroke::class;
    }
}
