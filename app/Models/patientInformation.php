<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class patientInformation
 * @package App\Models
 * @version August 25, 2021, 4:10 pm UTC
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
class patientInformation extends Model
{
    use SoftDeletes;
	
	public $timestamps = true;

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
        'dateOfAdmission' => 'nullable',
        'timeOfAdmission' => 'nullable|string|max:30',
        'name' => 'nullable|string|max:56',
        'dateOfBirth' => 'nullable',
        'gender' => 'nullable|string|max:10',
        'IP' => 'nullable|string',
        'proposedOperation' => 'nullable|string',
        'preOperativeDiagnosis' => 'nullable|string',
        'BP' => 'nullable|string|max:56',
        'HR' => 'nullable|string|max:56',
        'sao2' => 'nullable|string|max:56',
        'height' => 'nullable|string|max:56',
        'weight' => 'nullable|string|max:56',
        'BMI' => 'nullable|string|max:56',
        'ASAPhysicalStatus' => 'nullable|string|max:20',
        'status' => 'nullable|string|max:10'
    ];

    
}
