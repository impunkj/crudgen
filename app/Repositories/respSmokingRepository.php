<?php

namespace App\Repositories;

use App\Models\respSmoking;
use App\Repositories\BaseRepository;

/**
 * Class respSmokingRepository
 * @package App\Repositories
 * @version September 23, 2021, 4:31 am UTC
*/

class respSmokingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'howmany',
        'whenStop',
        'hlyy',
        'hlmm',
        'hldd'
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
        return respSmoking::class;
    }
}
