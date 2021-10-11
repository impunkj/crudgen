<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class anaesthetichistory
 * @package App\Models
 * @version October 11, 2021, 9:02 am UTC
 *
 * @property integer $patientNo
 * @property integer $typeOf
 * @property string $preAnaesthHistory
 * @property string $physicalExam
 */
class anaesthetichistory extends Model
{
    use SoftDeletes;

    use HasFactory;

	public $timestamps = true;
    public $table = 'anaesthetichistory';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'typeOf',
        'preAnaesthHistory',
        'physicalExam'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'typeOf' => 'integer',
        'preAnaesthHistory' => 'string',
        'physicalExam' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'typeOf' => 'nullable|integer',
        'preAnaesthHistory' => 'nullable|string',
        'physicalExam' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
