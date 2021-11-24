<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class covid
 * @package App\Models
 * @version November 23, 2021, 5:06 am UTC
 *
 * @property integer $patientNo
 * @property integer $whyy
 * @property integer $whmm
 * @property integer $whdd
 * @property string $wherePlace
 * @property string $treatment
 * @property string $resp
 * @property string $cvs
 * @property string $renal
 * @property string $anticoafungal
 * @property string $vaccinated
 */
class covid extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'covid';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'whyy',
        'whmm',
        'whdd',
        'wherePlace',
        'treatment',
        'resp',
        'cvs',
        'renal',
        'anticoafungal',
        'vaccinated'
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
        'wherePlace' => 'string',
        'treatment' => 'string',
        'resp' => 'string',
        'cvs' => 'string',
        'renal' => 'boolean',
        'anticoafungal' => 'string',
        'vaccinated' => 'string'
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
        'wherePlace' => 'nullable|string|max:20',
        'treatment' => 'nullable|string',
        'resp' => 'nullable|string|max:10',
        'cvs' => 'nullable|string|max:20',
        'renal' => 'nullable|boolean|max:10',
        'anticoafungal' => 'nullable|string|max:3',
        'vaccinated' => 'nullable|string|max:3',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
