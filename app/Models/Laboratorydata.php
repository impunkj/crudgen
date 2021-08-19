<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Laboratorydata
 * @package App\Models
 * @version August 19, 2021, 4:20 am UTC
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
        'GFR' => 'required|string|max:256',
        'other' => 'required|string',
        'Hgb' => 'required|string|max:56',
        'Glucose' => 'required|string|max:56',
        'Protein' => 'required|string|max:56',
        'xRay' => 'required|string|max:56',
        'HIV' => 'required|string|max:56',
        'PVC' => 'required|string|max:56',
        'Urea' => 'required|string|max:56',
        'Alb' => 'required|string|max:56',
        'ECG' => 'required|string|max:56',
        'HBSAg' => 'required|string|max:56',
        'WBC' => 'required|string|max:56',
        'Creat' => 'required|string|max:56',
        'totalBill' => 'required|string|max:56',
        '2DEcho' => 'required|string|max:56',
        'HCV' => 'required|string|max:56',
        'Plate' => 'required|string|max:56',
        'Na' => 'required|string|max:56',
        'dirBill' => 'required|string|max:56',
        'others' => 'required|string|max:56',
        'stressAngio' => 'required|string|max:56',
        'PT' => 'required|string|max:56',
        'K' => 'required|string|max:56',
        'LDH' => 'required|string|max:56',
        'other1' => 'required|string|max:56',
        'allergies' => 'required|string',
        'PTT' => 'required|string|max:56',
        'Ca' => 'required|string|max:56',
        'alkPhos' => 'required|string|max:56',
        'other2' => 'required|string|max:56',
        'INR' => 'required|string|max:56',
        'Mg' => 'required|string|max:56',
        'Amylase' => 'required|string|max:56',
        'other3' => 'required|string|max:56',
        'status' => 'required|string|max:10',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
