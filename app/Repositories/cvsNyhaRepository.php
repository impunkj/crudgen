<?php

namespace App\Repositories;

use App\Models\cvsNyha;
use App\Repositories\BaseRepository;

/**
 * Class cvsNyhaRepository
 * @package App\Repositories
 * @version September 23, 2021, 3:20 am UTC
*/

class cvsNyhaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'Nclass'
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
        return cvsNyha::class;
    }
}
