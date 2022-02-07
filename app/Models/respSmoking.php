<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class respSmoking
 * @package App\Models
 * @version September 23, 2021, 4:31 am UTC
 *
 * @property integer $patientNo
 * @property string $howmany
 * @property string $whenStop
 * @property integer $hlyy
 * @property integer $hlmm
 * @property integer $hldd
 */
class respSmoking extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'respsmoking';
	
	public $timestamps = true;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'howmany',
        'whenStop',
        'hlyy',
        'hlmm',
        'hldd'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'howmany' => 'string',
        'whenStop' => 'string',
        'hlyy' => 'integer',
        'hlmm' => 'integer',
        'hldd' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'nullable|integer',
        'howmany' => 'nullable|string',
        'whenStop' => 'nullable|string',
        'hlyy' => 'nullable',
        'hlmm' => 'nullable',
        'hldd' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
