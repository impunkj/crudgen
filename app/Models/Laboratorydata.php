<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Laboratorydata
 * @package App\Models
 * @version August 23, 2021, 2:16 pm UTC
 *
 * @property integer $patientNo
 * @property string $GFR
 * @property string $other
 * @property string $Hgb
 * @property string $Glucose
 * @property string $Protein
 * @property string $xRay
 * @property string $HIV
 * @property string $PVC
 * @property string $Urea
 * @property string $Alb
 * @property string $ECG
 * @property string $HBSAg
 * @property string $WBC
 * @property string $Creat
 * @property string $totalBill
 * @property string $2DEcho
 * @property string $HCV
 * @property string $Plate
 * @property string $Na
 * @property string $dirBill
 * @property string $others
 * @property string $stressAngio
 * @property string $PT
 * @property string $K
 * @property string $LDH
 * @property string $other1
 * @property string $allergies
 * @property string $PTT
 * @property string $Ca
 * @property string $alkPhos
 * @property string $other2
 * @property string $INR
 * @property string $Mg
 * @property string $Amylase
 * @property string $other3
 * @property string $status
 */
class Laboratorydata extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'laboratorydata';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'recNo' => 'integer',
        'patientNo' => 'integer',
        'GFR' => 'string',
        'other' => 'string',
        'Hgb' => 'string',
        'Glucose' => 'string',
        'Protein' => 'string',
        'xRay' => 'string',
        'HIV' => 'string',
        'PVC' => 'string',
        'Urea' => 'string',
        'Alb' => 'string',
        'ECG' => 'string',
        'HBSAg' => 'string',
        'WBC' => 'string',
        'Creat' => 'string',
        'totalBill' => 'string',
        '2DEcho' => 'string',
        'HCV' => 'string',
        'Plate' => 'string',
        'Na' => 'string',
        'dirBill' => 'string',
        'others' => 'string',
        'stressAngio' => 'string',
        'PT' => 'string',
        'K' => 'string',
        'LDH' => 'string',
        'other1' => 'string',
        'allergies' => 'string',
        'PTT' => 'string',
        'Ca' => 'string',
        'alkPhos' => 'string',
        'other2' => 'string',
        'INR' => 'string',
        'Mg' => 'string',
        'Amylase' => 'string',
        'other3' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
    ];

    
}
