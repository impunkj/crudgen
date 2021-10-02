<?php

namespace App\Repositories;

use App\Models\respAsthma;
use App\Repositories\BaseRepository;

/**
 * Class respAsthmaRepository
 * @package App\Repositories
 * @version September 23, 2021, 4:06 am UTC
*/

class respAsthmaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'whatCause',
        'treatment',
        'hlyy',
        'hlmm',
        'hldd',
        'layy',
        'lamm',
        'ladd',
        'howDoyouTreat',
        'urti',
        'advised'
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
        return respAsthma::class;
    }
}
