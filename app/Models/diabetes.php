<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class diabetes
 * @package App\Models
 * @version October 2, 2021, 4:33 pm UTC
 *
 * @property integer $patientNo
 * @property string $typeOfD
 * @property string $sugarCheckHome
 * @property string $howmuch
 * @property string $whatTreatment
 * @property string $rxtreat
 * @property string $complications
 * @property string $dietcontrol
 */
class diabetes extends Model
{
    use SoftDeletes;

    use HasFactory;
	public $timestamps = true;

    public $table = 'diabetes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'typeOfD',
        'sugarCheckHome',
        'howmuch',
        'whatTreatment',
        'rxtreat',
        'complications',
        'dietcontrol'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'typeOfD' => 'string',
        'sugarCheckHome' => 'string',
        'howmuch' => 'string',
        'whatTreatment' => 'string',
        'rxtreat' => 'string',
        'dietcontrol' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'typeOfD' => 'nullable|string|max:6',
        'sugarCheckHome' => 'nullable|string|max:3',
        'howmuch' => 'nullable|string|max:256',
        'whatTreatment' => 'nullable|string',
        'rxtreat' => 'nullable|string|max:10',
        'complications' => 'nullable',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
