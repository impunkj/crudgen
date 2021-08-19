<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class patientInformations
 * @package App\Models
 * @version August 17, 2021, 9:28 am UTC
 *
 * @property string|\Carbon\Carbon $dateOfAdmission
 * @property string $timeOfAdmission
 * @property string $name
 * @property string|\Carbon\Carbon $dateOfBirth
 * @property string $gender
 * @property string $IP
 * @property string $proposedOperation
 * @property string $preOperativeDiagnosis
 * @property string $BP
 * @property string $HR
 * @property string $sao2
 * @property string $height
 * @property string $weight
 * @property string $BMI
 * @property string $ASAPhysicalStatus
 * @property string $status
 */
class patientInformations extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'patientinformation';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'dateOfAdmission',
        'timeOfAdmission',
        'name',
        'dateOfBirth',
        'gender',
        'IP',
        'proposedOperation',
        'preOperativeDiagnosis',
        'BP',
        'HR',
        'sao2',
        'height',
        'weight',
        'BMI',
        'ASAPhysicalStatus',
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
        'name' => 'string',
        'dateOfBirth' => 'datetime',
        'gender' => 'string',
        'IP' => 'string',
        'proposedOperation' => 'string',
        'preOperativeDiagnosis' => 'string',
        'BP' => 'string',
        'HR' => 'string',
        'sao2' => 'string',
        'height' => 'string',
        'weight' => 'string',
        'BMI' => 'string',
        'ASAPhysicalStatus' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'dateOfAdmission' => 'required',
        'timeOfAdmission' => 'required|string|max:20',
        'name' => 'required|string|max:56',
        'dateOfBirth' => 'required',
        'gender' => 'required|string|max:10',
        'IP' => 'required|string',
        'proposedOperation' => 'required|string',
        'preOperativeDiagnosis' => 'required|string',
        'BP' => 'required|string|max:56',
        'HR' => 'required|string|max:56',
        'sao2' => 'required|string|max:56',
        'height' => 'required|string|max:56',
        'weight' => 'required|string|max:56',
        'BMI' => 'required|string|max:56',
        'ASAPhysicalStatus' => 'required|string|max:20',
        'status' => 'required|string|max:10',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
