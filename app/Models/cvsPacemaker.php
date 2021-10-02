<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class cvsPacemaker
 * @package App\Models
 * @version September 23, 2021, 3:40 am UTC
 *
 * @property integer $patientNo
 * @property string $why
 * @property string $pacemakerType
 * @property string|\Carbon\Carbon $whyy
 * @property string|\Carbon\Carbon $whmm
 * @property string|\Carbon\Carbon $whdd
 * @property integer $ckpaperwork
 */
class cvsPacemaker extends Model
{
    use SoftDeletes;

    use HasFactory;

	public $timestamps = true;
    
	public $table = 'cvspacemaker';
	
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'why',
        'pacemakerType',
        'whyy',
        'whmm',
        'whdd',
        'ckpaperwork'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'why' => 'string',
        'pacemakerType' => 'string',
        'whyy' => 'datetime',
        'whmm' => 'datetime',
        'whdd' => 'datetime',
        'ckpaperwork' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'why' => 'required|string',
        'pacemakerType' => 'required|string',
        'whyy' => 'required',
        'whmm' => 'required',
        'whdd' => 'required',
        'ckpaperwork' => 'required|integer'
    ];

    
}
