<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class hepaticJaundice
 * @package App\Models
 * @version October 2, 2021, 6:01 pm UTC
 *
 * @property integer $patientNo
 * @property integer $whyy
 * @property integer $whmm
 * @property integer $whdd
 * @property boolean $needHospital
 * @property string $cause
 * @property string $viralStatus
 * @property string $childCriteria
 * @property string $INR
 */
class hepaticJaundice extends Model
{
    use SoftDeletes;

    use HasFactory;
	public $timestamps = true;

    public $table = 'hepaticjaundice';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'whyy',
        'whmm',
        'whdd',
        'needHospital',
        'cause',
        'viralStatus',
        'childCriteria',
        'INR'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'whyy' => 'integer',
        'whmm' => 'integer',
        'whdd' => 'integer',
        'needHospital' => 'boolean',
        'cause' => 'string',
        'viralStatus' => 'string',
        'childCriteria' => 'string',
        'INR' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'whyy' => 'nullable|integer',
        'whmm' => 'nullable|integer',
        'whdd' => 'nullable|integer',
        'needHospital' => 'nullable|boolean',
        'cause' => 'nullable|string',
        'viralStatus' => 'nullable|string',
        'childCriteria' => 'nullable|string',
        'INR' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
