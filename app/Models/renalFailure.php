<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class renalFailure
 * @package App\Models
 * @version October 2, 2021, 2:59 pm UTC
 *
 * @property integer $patientNo
 * @property string $urea
 * @property string $creatinine
 * @property string $dialysis
 * @property string $hemo
 * @property string $hemoValue
 * @property string $peritoneal
 * @property string $peritonealValue
 * @property string $fistual
 * @property string $fistualValue
 */
class renalFailure extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'renalfailure';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'urea',
        'creatinine',
        'dialysis',
        'hemo',
        'hemoValue',
        'peritoneal',
        'peritonealValue',
        'fistual',
        'fistualValue'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'urea' => 'string',
        'creatinine' => 'string',
        'dialysis' => 'string',
        'hemo' => 'string',
        'hemoValue' => 'string',
        'peritoneal' => 'string',
        'peritonealValue' => 'string',
        'fistual' => 'string',
        'fistualValue' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'urea' => 'nullable|string|max:15',
        'creatinine' => 'nullable|string|max:15',
        'dialysis' => 'nullable|boolean',
        'hemo' => 'nullable|string|max:15',
        'hemoValue' => 'nullable|string|max:255',
        'peritoneal' => 'nullable|string|max:15',
        'peritonealValue' => 'nullable|string|max:255',
        'fistual' => 'nullable|boolean',
        'fistualValue' => 'nullable|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
