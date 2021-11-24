<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class frality
 * @package App\Models
 * @version November 24, 2021, 10:53 am UTC
 *
 * @property integer $patientNo
 * @property string $Ssteroid
 * @property string $sterioid
 * @property string $frailityscore
 * @property string $cognition
 * @property string $ghstatus
 * @property string $describehealth
 * @property string $findependence
 * @property string $socialSupport
 * @property string $medicationusefive
 * @property string $medicationuseprescription
 * @property string $Nutrition
 * @property string $Mood
 * @property string $Continence
 * @property string $Functionalperformance
 * @property string $Totals
 */
class frality extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'frality';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'Ssteroid',
        'sterioid',
        'frailityscore',
        'cognition',
        'ghstatus',
        'describehealth',
        'findependence',
        'socialSupport',
        'medicationusefive',
        'medicationuseprescription',
        'Nutrition',
        'Mood',
        'Continence',
        'Functionalperformance',
        'Totals'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'Ssteroid' => 'string',
        'sterioid' => 'string',
        'frailityscore' => 'string',
        'cognition' => 'string',
        'ghstatus' => 'string',
        'describehealth' => 'string',
        'findependence' => 'string',
        'socialSupport' => 'string',
        'medicationusefive' => 'string',
        'medicationuseprescription' => 'string',
        'Nutrition' => 'string',
        'Mood' => 'string',
        'Continence' => 'string',
        'Functionalperformance' => 'string',
        'Totals' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'Ssteroid' => 'nullable|string',
        'sterioid' => 'nullable|string',
        'frailityscore' => 'nullable|string|max:10',
        'cognition' => 'nullable|string|max:20',
        'ghstatus' => 'nullable|string|max:10',
        'describehealth' => 'nullable|string|max:20',
        'findependence' => 'nullable|string|max:3',
        'socialSupport' => 'nullable|string|max:10',
        'medicationusefive' => 'nullable|string|max:10',
        'medicationuseprescription' => 'nullable|string|max:20',
        'Nutrition' => 'nullable|string|max:3',
        'Mood' => 'nullable|string|max:3',
        'Continence' => 'nullable|string|max:3',
        'Functionalperformance' => 'nullable|string|max:5',
        'Totals' => 'nullable|string|max:10',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
