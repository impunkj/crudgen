<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class cvsAngina
 * @package App\Models
 * @version September 23, 2021, 2:52 am UTC
 *
 * @property integer $patientNo
 * @property string $status
 * @property integer $takingTreatment
 * @property string $causeAngina
 * @property string $howItStop
 * @property integer $dtyy
 * @property integer $dtmm
 * @property integer $dtdd
 * @property string|\Carbon\Carbon $created_at
 * @property string|\Carbon\Carbon $updated_at
 */
class cvsAngina extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cvsangina';
    
    public $timestamps = true;


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'status',
        'takingTreatment',
        'causeAngina',
        'howItStop',
        'dtyy',
        'dtmm',
        'dtdd',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'status' => 'string',
        'takingTreatment' => 'integer',
        'causeAngina' => 'string',
        'howItStop' => 'string',
        'dtyy' => 'integer',
        'dtmm' => 'integer',
        'dtdd' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'status' => 'nullable|string|max:8',
        'takingTreatment' => 'nullable|integer',
        'causeAngina' => 'nullable|string',
        'howItStop' => 'nullable|string',
        'dtyy' => 'nullable|integer',
        'dtmm' => 'nullable|integer',
        'dtdd' => 'nullable|integer'
    ];

    
}
