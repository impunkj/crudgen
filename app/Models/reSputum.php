<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class reSputum
 * @package App\Models
 * @version September 23, 2021, 4:56 am UTC
 *
 * @property integer $patientNo
 * @property integer $hlyy
 * @property integer $hlmm
 * @property integer $hldd
 * @property string $color
 * @property string $treatment
 * @property integer $thlyy
 * @property integer $thlmm
 * @property integer $thldd
 */
class reSputum extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'resputum';
	public $timestamps = true;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'hlyy',
        'hlmm',
        'hldd',
        'color',
        'treatment',
        'thlyy',
        'thlmm',
        'thldd'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'hlyy' => 'integer',
        'hlmm' => 'integer',
        'hldd' => 'integer',
        'color' => 'string',
        'treatment' => 'string',
        'thlyy' => 'integer',
        'thlmm' => 'integer',
        'thldd' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'hlyy' => 'nullable|integer',
        'hlmm' => 'nullable|integer',
        'hldd' => 'nullable|integer',
        'color' => 'nullable|string|max:255',
        'treatment' => 'nullable|string',
        'thlyy' => 'nullable|integer',
        'thlmm' => 'nullable|integer',
        'thldd' => 'nullable|integer',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
