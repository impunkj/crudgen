<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class cvsMi
 * @package App\Models
 * @version September 30, 2021, 6:24 am UTC
 *
 * @property integer $patientNo
 * @property integer $whyy
 * @property integer $whmm
 * @property integer $whdd
 * @property string $medical
 * @property string $stented
 * @property string $treatMent
 * @property integer $twhyy
 * @property integer $twhmm
 * @property integer $twhdd
 * @property string $stoppedAntiplatelet
 * @property string $whatTreatment
 * @property string $symptomsImproved
 * @property string $cabg
 * @property string $medication
 * @property string $BStentedCABG
 * @property string $typeofGraft
 * @property string $repeatCag
 */
class cvsMi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cvsmi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

	public $timestamps = true;
	
    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'whyy',
        'whmm',
        'whdd',
        'medical',
        'stented',
        'treatMent',
        'twhyy',
        'twhmm',
        'twhdd',
        'stoppedAntiplatelet',
        'whatTreatment',
        'symptomsImproved',
        'cabg',
        'medication',
        'BStentedCABG',
        'typeofGraft',
        'repeatCag'
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
        'medical' => 'string',
        'stented' => 'string',
        'treatMent' => 'string',
        'twhyy' => 'integer',
        'twhmm' => 'integer',
        'twhdd' => 'integer',
        'stoppedAntiplatelet' => 'string',
        'whatTreatment' => 'string',
        'symptomsImproved' => 'string',
        'cabg' => 'string',
        'medication' => 'string',
        'BStentedCABG' => 'string',
        'typeofGraft' => 'string',
        'repeatCag' => 'string'
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
        'medical' => 'nullable|string|max:255',
        'stented' => 'nullable|string|max:3',
        'treatMent' => 'nullable|string',
        'twhyy' => 'nullable|integer',
        'twhmm' => 'nullable|integer',
        'twhdd' => 'nullable|integer',
        'stoppedAntiplatelet' => 'nullable|string|max:3',
        'whatTreatment' => 'nullable|json',
        'symptomsImproved' => 'nullable|string|max:3',
        'cabg' => 'nullable|string|max:3',
        'medication' => 'nullable|string|max:255',
        'BStentedCABG' => 'nullable|string|max:3',
        'typeofGraft' => 'nullable|string',
        'repeatCag' => 'nullable|string|max:255',
        'deleted_at' => 'nullable'
    ];

    
}
