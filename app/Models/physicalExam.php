<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class physicalExam
 * @package App\Models
 * @version October 19, 2021, 6:40 am UTC
 *
 * @property integer $patientNo
 * @property string $airway
 * @property integer $mp
 * @property string $mouthOpening
 * @property string $mentohyoidDistance
 * @property string $neck
 * @property string $teeth
 * @property string $lungs
 * @property string $heart
 * @property string $cns
 * @property string $pupils
 * @property string $e
 * @property string $v
 * @property string $m
 * @property string $other
 * @property string $venous
 * @property string $spineExam
 * @property string $anaesthesiaPlan
 * @property string $proposedPost
 * @property string $PeriPop
 * @property string $willtakeBlood
 * @property integer $pregnant
 * @property string $currentmedications
 */
class physicalExam extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'physicalexam';
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'airway' => 'string',
        'mp' => 'integer',
        'mouthOpening' => 'string',
        'mentohyoidDistance' => 'string',
        'neck' => 'string',
        'teeth' => 'string',
        'lungs' => 'string',
        'heart' => 'string',
        'cns' => 'string',
        'pupils' => 'string',
        'e' => 'string',
        'v' => 'string',
        'm' => 'string',
        'other' => 'string',
        'venous' => 'string',
        'spineExam' => 'string',
        'anaesthesiaPlan' => 'string',
        'proposedPost' => 'string',
        'PeriPop' => 'string',
        'willtakeBlood' => 'string',
        'pregnant' => 'integer',
        'currentmedications' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'airway' => 'nullable|string|max:255',
        'mp' => 'nullable|integer',
        'mouthOpening' => 'nullable|string|max:255',
        'mentohyoidDistance' => 'nullable|string|max:55',
        'neck' => 'nullable|string',
        'teeth' => 'nullable|string',
        'lungs' => 'nullable|string',
        'heart' => 'nullable|string',
        'cns' => 'nullable|string|max:255',
        'pupils' => 'nullable|string',
        'e' => 'nullable|string|max:55',
        'v' => 'nullable|string|max:55',
        'm' => 'nullable|string|max:55',
        'other' => 'nullable|string|max:55',
        'venous' => 'nullable|string|max:55',
        'spineExam' => 'nullable|string|max:55',
        'anaesthesiaPlan' => 'nullable|string|max:55',
        'proposedPost' => 'nullable|string|max:55',
        'PeriPop' => 'nullable|string|max:3',
        'willtakeBlood' => 'nullable|string|max:3',
        'pregnant' => 'nullable|integer',
        'currentmedications' => 'nullable|string',
        'deleted_at' => 'nullable',
        'updated_at' => 'nullable',
        'created_at' => 'nullable'
    ];

    
}
