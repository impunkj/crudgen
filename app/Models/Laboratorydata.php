<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Laboratorydata
 * @package App\Models
 * @version September 10, 2021, 10:48 am UTC
 *
 * @property integer $patientNo
 * @property string $totalBill
 * @property string $dirBill
 * @property string $alkPhos
 * @property string $sgot
 * @property string $sgpt
 * @property string $Ldh
 * @property string $Urea
 * @property string $Creatine
 * @property string $Na
 * @property string $K
 * @property string $Ca
 * @property string $Mg
 * @property string $Hb
 * @property string $WBC
 * @property string $Platelets
 * @property string $Pcv
 * @property string $Alb
 * @property string $Protein
 * @property integer $APTT
 * @property integer $PT
 * @property string $INR
 * @property string $Rbs
 * @property string $Ppbs
 * @property string $Hba
 * @property string $Ecg
 * @property string $ChestXray
 * @property string $Other
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'recNo' => 'integer',
        'patientNo' => 'integer',
        'totalBill' => 'string',
        'dirBill' => 'string',
        'alkPhos' => 'string',
        'sgot' => 'string',
        'sgpt' => 'string',
        'Ldh' => 'string',
        'Urea' => 'string',
        'Creatine' => 'string',
        'Na' => 'string',
        'K' => 'string',
        'Ca' => 'string',
        'Mg' => 'string',
        'Hb' => 'string',
        'WBC' => 'string',
        'Platelets' => 'string',
        'Pcv' => 'string',
        'Alb' => 'string',
        'Protein' => 'string',
        'APTT' => 'integer',
        'PT' => 'integer',
        'INR' => 'string',
        'Rbs' => 'string',
        'Ppbs' => 'string',
        'Hba' => 'string',
        'Ecg' => 'string',
        'ChestXray' => 'string',
        'Other' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'totalBill' => 'nullable|string|max:56',
        'dirBill' => 'nullable|string|max:56',
        'alkPhos' => 'nullable|string|max:56',
        'sgot' => 'nullable|string|max:56',
        'sgpt' => 'nullable|string|max:56',
        'Ldh' => 'nullable|string|max:56',
        'Urea' => 'nullable|string|max:56',
        'Creatine' => 'nullable|string|max:10',
        'Na' => 'nullable|string|max:10',
        'K' => 'nullable|string|max:10',
        'Ca' => 'nullable|string|max:10',
        'Mg' => 'nullable|string|max:10',
        'Hb' => 'nullable|string|max:10',
        'WBC' => 'nullable|string|max:10',
        'Platelets' => 'nullable|string|max:10',
        'Pcv' => 'nullable|string|max:10',
        'Alb' => 'nullable|string|max:10',
        'Protein' => 'nullable|string|max:10',
        'APTT' => 'nullable|integer',
        'PT' => 'nullable|integer',
        'INR' => 'nullable|string|max:10',
        'Rbs' => 'nullable|string|max:10',
        'Ppbs' => 'nullable|string|max:10',
        'Hba' => 'nullable|string|max:10',
        'Ecg' => 'nullable|string',
        'ChestXray' => 'nullable|string',
        'Other' => 'nullable|string',
        'status' => 'nullable|string|max:10',
        'deleted_at' => 'nullable'
    ];

    
}
