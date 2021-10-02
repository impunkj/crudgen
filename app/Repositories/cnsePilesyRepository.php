<?php

namespace App\Repositories;

use App\Models\cnsePilesy;
use App\Repositories\BaseRepository;

/**
 * Class cnsePilesyRepository
 * @package App\Repositories
 * @version September 23, 2021, 6:03 am UTC
*/

class cnsePilesyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'hlyy',
        'hlmm',
        'hldd',
        'lsyy',
        'lsmm',
        'lsdd',
        'medication',
        'Neurologyconsult'
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
        return cnsePilesy::class;
    }
}
