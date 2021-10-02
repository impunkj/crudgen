<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class thyroid
 * @package App\Models
 * @version October 2, 2021, 6:21 pm UTC
 *
 * @property integer $patientNo
 * @property string $typeOf
 * @property string $whatTreatment
 */
class thyroid extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'thyroid';
    
	public $timestamps = true;
	
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'typeOf',
        'whatTreatment'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'typeOf' => 'string',
        'whatTreatment' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'typeOf' => 'nullable|string|max:5',
        'whatTreatment' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
