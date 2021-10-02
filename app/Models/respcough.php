<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class respcough
 * @package App\Models
 * @version September 23, 2021, 4:50 am UTC
 *
 * @property integer $patientNo
 * @property integer $hlyy
 * @property integer $hlmm
 * @property integer $hldd
 * @property string $cause
 */
class respcough extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'respcough';
	
	  public $timestamps = true;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'hlyy',
        'hlmm',
        'hldd',
        'cause'
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
        'cause' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'hlyy' => 'required|integer',
        'hlmm' => 'required|integer',
        'hldd' => 'required|integer',
        'cause' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
