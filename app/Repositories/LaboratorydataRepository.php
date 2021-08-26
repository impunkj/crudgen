<?php

namespace App\Repositories;

use App\Models\Laboratorydata;
use App\Repositories\BaseRepository;

/**
 * Class LaboratorydataRepository
 * @package App\Repositories
 * @version August 23, 2021, 2:16 pm UTC
*/

class LaboratorydataRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'GFR',
        'other',
        'Hgb',
        'Glucose',
        'Protein',
        'xRay',
        'HIV',
        'PVC',
        'Urea',
        'Alb',
        'ECG',
        'HBSAg',
        'WBC',
        'Creat',
        'totalBill',
        '2DEcho',
        'HCV',
        'Plate',
        'Na',
        'dirBill',
        'others',
        'stressAngio',
        'PT',
        'K',
        'LDH',
        'other1',
        'allergies',
        'PTT',
        'Ca',
        'alkPhos',
        'other2',
        'INR',
        'Mg',
        'Amylase',
        'other3',
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
