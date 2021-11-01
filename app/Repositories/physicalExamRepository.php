<?php

namespace App\Repositories;

use App\Models\physicalExam;
use App\Repositories\BaseRepository;

/**
 * Class physicalExamRepository
 * @package App\Repositories
 * @version October 19, 2021, 6:40 am UTC
*/

class physicalExamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'patientNo',
        'airway',
        'mp',
        'mouthOpening',
        'mentohyoidDistance',
        'neck',
        'teeth',
        'lungs',
        'heart',
        'cns',
        'pupils',
        'e',
        'v',
        'm',
        'other',
        'venous',
        'spineExam',
        'anaesthesiaPlan',
        'proposedPost',
        'PeriPop',
        'willtakeBlood',
        'pregnant',
        'currentmedications'
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
        return physicalExam::class;
    }
}
