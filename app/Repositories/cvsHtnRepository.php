<?php

namespace App\Repositories;

use App\Models\cvsHtn;
use App\Repositories\BaseRepository;

/**
 * Class cvsHtnRepository
 * @package App\Repositories
 * @version September 23, 2021, 2:31 am UTC
*/

class cvsHtnRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'hlyy',
        'hlmm',
        'hldd',
        'stress',
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
        return cvsHtn::class;
    }
}
