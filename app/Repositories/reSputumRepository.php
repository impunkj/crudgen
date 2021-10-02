<?php

namespace App\Repositories;

use App\Models\reSputum;
use App\Repositories\BaseRepository;

/**
 * Class reSputumRepository
 * @package App\Repositories
 * @version September 23, 2021, 4:56 am UTC
*/

class reSputumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'hlyy',
        'hlmm',
        'hldd',
        'color',
        'treatment',
        'thlyy',
        'thlmm',
        'thldd'
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
        return reSputum::class;
    }
}
