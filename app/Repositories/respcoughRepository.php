<?php

namespace App\Repositories;

use App\Models\respcough;
use App\Repositories\BaseRepository;

/**
 * Class respcoughRepository
 * @package App\Repositories
 * @version September 23, 2021, 4:50 am UTC
*/

class respcoughRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'hlyy',
        'hlmm',
        'hldd',
        'cause'
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
        return respcough::class;
    }
}
