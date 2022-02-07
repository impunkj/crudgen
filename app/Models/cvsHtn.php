<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class cvsHtn
 * @package App\Models
 * @version September 23, 2021, 2:31 am UTC
 *
 * @property integer $patientNo
 * @property integer $hlyy
 * @property integer $hlmm
 * @property integer $hldd
 * @property integer $stress
 * @property string $treatment
 */
class cvsHtn extends Model
{
    use SoftDeletes;

    use HasFactory;
	
	public $timestamps = true;

    public $table = 'cvshtn';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'hlyy',
        'hlmm',
        'hldd',
        'stress',
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
        'hlyy' => 'integer',
        'hlmm' => 'integer',
        'hldd' => 'integer',
        'stress' => 'integer',
        'treatment' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'hlyy' => 'nullable',
        'hlmm' => 'nullable',
        'hldd' => 'nullable',
        'stress' => 'nullable',
        'treatment' => 'nullable|string'
    ];

    
}
