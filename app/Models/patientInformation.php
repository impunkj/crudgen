<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class patientInformation
 * @package App\Models
 * @version September 10, 2021, 6:25 am UTC
 *
 * @property string|\Carbon\Carbon $dateOfAdmission
 * @property string $timeOfAdmission
 * @property string $hospitalName
 * @property integer $age
 * @property integer $pincode
 * @property string $name
 * @property string|\Carbon\Carbon $dateOfBirth
 * @property string $gender
 * @property string $registerNumber
 * @property string $proposedOperation
 * @property string $side
 * @property string $preOperativeDiagnosis
 * @property string $BP
 * @property string $HR
 * @property string $sao2
 * @property string $height
 * @property string $weight
 * @property string $BMI
 * @property string $ASAPhysicalStatus
 * @property integer $isemergency
 * @property string $allergies
 * @property string $status
 */
class patientInformation extends Model
{
    use SoftDeletes;

    use HasFactory;
	
	public $timestamps = true;


    public $table = 'patientinformation';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'dateOfAdmission',
        'timeOfAdmission',
        'hospitalName',
        'age',
        'pincode',
        'name',
        'dateOfBirth',
        'gender',
        'registerNumber',
        'proposedOperation',
        'side',
        'preOperativeDiagnosis',
        'BP',
        'HR',
        'sao2',
        'height',
        'weight',
        'BMI',
        'ASAPhysicalStatus',
        'isemergency',
        'allergies',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'patientNo' => 'integer',
        'dateOfAdmission' => 'datetime',
        'timeOfAdmission' => 'string',
        'hospitalName' => 'string',
        'age' => 'integer',
        'pincode' => 'integer',
        'name' => 'string',
        'dateOfBirth' => 'datetime',
        'gender' => 'string',
        'registerNumber' => 'string',
        'proposedOperation' => 'string',
        'side' => 'string',
        'preOperativeDiagnosis' => 'string',
        'BP' => 'string',
        'HR' => 'string',
        'sao2' => 'string',
        'height' => 'string',
        'weight' => 'string',
        'BMI' => 'string',
        'ASAPhysicalStatus' => 'string',
        'isemergency' => 'integer',
        'allergies' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'dateOfAdmission' => 'nullable',
        'timeOfAdmission' => 'nullable|string|max:30',
        'hospitalName' => 'nullable|string|max:25',
        'age' => 'required|integer',
        'pincode' => 'nullable|integer',
        'name' => 'nullable|string|max:56',
        'dateOfBirth' => 'nullable',
        'gender' => 'required|string|max:10',
        'registerNumber' => 'nullable|string|max:255',
        'proposedOperation' => 'nullable|string',
        'side' => 'nullable|string|max:10',
        'preOperativeDiagnosis' => 'nullable|string',
        'BP' => 'required|string|max:56',
        'HR' => 'required|string|max:56',
        'sao2' => 'required|string|max:56',
        'height' => 'nullable|string|max:56',
        'weight' => 'required|string|max:56',
        'BMI' => 'nullable|string|max:56',
        'ASAPhysicalStatus' => 'nullable|string|max:5',
        'isemergency' => 'nullable|integer',
        'allergies' => 'nullable|string',
        'status' => 'nullable|string|max:10',
        'deleted_at' => 'nullable'
    ];

    
}
