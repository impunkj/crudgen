<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class cnsePilesy
 * @package App\Models
 * @version September 23, 2021, 6:03 am UTC
 *
 * @property integer $patientNo
 * @property integer $hlyy
 * @property integer $hlmm
 * @property integer $hldd
 * @property integer $lsyy
 * @property integer $lsmm
 * @property integer $lsdd
 * @property string $medication
 * @property string $Neurologyconsult
 */
class cnsePilesy extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cnsepilesy';
	
	public $timestamps = true;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'hlyy',
        'hlmm',
        'hldd',
        'lsyy',
        'lsmm',
        'lsdd',
        'medication',
        'Neurologyconsult'
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
        'lsyy' => 'integer',
        'lsmm' => 'integer',
        'lsdd' => 'integer',
        'medication' => 'string',
        'Neurologyconsult' => 'string'
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
        'lsyy' => 'nullable',
        'lsmm' => 'nullable',
        'lsdd' => 'nullable',
        'medication' => 'nullable|string',
        'Neurologyconsult' => 'nullable|string|max:3',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
