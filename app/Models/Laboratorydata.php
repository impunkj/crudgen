<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Laboratorydata
 * @package App\Models
 * @version September 30, 2021, 5:28 am UTC
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
 * @property integer $hiv
 * @property integer $hbsag
 * @property integer $hcv
 * @property integer $rtpcr
 * @property string $other1
 * @property string $other2
 * @property string $other3
 * @property string $other4
 * @property string $Ecg
 * @property string $cardiacEcho
 * @property string $ChestXray
 * @property string $Other
 * @property string $status
 */
class Laboratorydata extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'laboratorydata';
    
	public $timestamps = true;
	
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
        'hiv',
        'hbsag',
        'hcv',
        'rtpcr',
        'other1',
        'other2',
        'other3',
        'other4',
        'Ecg',
        'cardiacEcho',
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
        'hiv' => 'integer',
        'hbsag' => 'integer',
        'hcv' => 'integer',
        'rtpcr' => 'integer',
        'other1' => 'string',
        'other2' => 'string',
        'other3' => 'string',
        'other4' => 'string',
        'Ecg' => 'string',
        'cardiacEcho' => 'string',
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
        'hiv' => 'nullable|integer',
        'hbsag' => 'nullable|integer',
        'hcv' => 'nullable|integer',
        'rtpcr' => 'nullable|integer',
        'other1' => 'required|string|max:256',
        'other2' => 'nullable|string|max:256',
        'other3' => 'nullable|string|max:256',
        'other4' => 'nullable|string|max:256',
        'Ecg' => 'nullable|string|max:256',
        'cardiacEcho' => 'nullable|string',
        'ChestXray' => 'nullable|string',
        'Other' => 'nullable|string',
        'status' => 'nullable|string|max:10',
        'deleted_at' => 'nullable'
    ];

    
}
