<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class cnsStroke
 * @package App\Models
 * @version September 23, 2021, 5:46 am UTC
 *
 * @property integer $patientNo
 * @property integer $whyy
 * @property integer $whmm
 * @property integer $whdd
 * @property integer $pStatus
 * @property string $treatment
 */
class cnsStroke extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cnsstroke';
    
	public $timestamps = true;
	
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'whyy',
        'whmm',
        'whdd',
        'pStatus',
        'treatment'
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
        'pStatus' => 'string',
        'treatment' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'whyy' => 'nullable',
        'whmm' => 'nullable',
        'whdd' => 'nullable',
        'pStatus' => 'nullable|string',
        'treatment' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
