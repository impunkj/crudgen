<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class renalUti
 * @package App\Models
 * @version October 2, 2021, 3:01 pm UTC
 *
 * @property integer $patientNo
 * @property integer $whyy
 * @property integer $whmm
 * @property integer $whdd
 * @property integer $treatedV
 * @property string $treated
 * @property string $cue
 * @property string $whatdrugs
 */
class renalUti extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'renaluti';
	
	public $timestamps = true;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'whyy',
        'whmm',
        'whdd',
        'treatedV',
        'treated',
        'cue',
        'whatdrugs'
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
        'treatedV' => 'integer',
        'treated' => 'string',
        'cue' => 'string',
        'whatdrugs' => 'string'
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
        'treatedV' => 'nullable|integer',
        'treated' => 'nullable|string',
        'cue' => 'nullable|string',
        'whatdrugs' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
