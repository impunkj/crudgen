<?php

namespace App\Repositories;

use App\Models\Laboratorydata;
use App\Repositories\BaseRepository;

/**
 * Class LaboratorydataRepository
 * @package App\Repositories
 * @version September 10, 2021, 10:48 am UTC
*/

class LaboratorydataRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'totalBill',
        'dirBill',
        'alkPhos',
        'sgot',
        'sgpt',
        'Ldh',
        'Urea',
        'Creatine',
        'Na',
        'K',
        'Ca',
        'Mg',
        'Hb',
        'WBC',
        'Platelets',
        'Pcv',
        'Alb',
        'Protein',
        'APTT',
        'PT',
        'INR',
        'Rbs',
        'Ppbs',
        'Hba',
        'Ecg',
        'ChestXray',
        'Other',
        'status'
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
        return Laboratorydata::class;
    }
}
