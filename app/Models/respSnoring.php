<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class respSnoring
 * @package App\Models
 * @version September 23, 2021, 4:44 am UTC
 *
 * @property integer $patientNo
 * @property integer $stopBangScore
 * @property string $sleepStudy
 * @property string $cpap
 * @property string $OSAW
 * @property string $duFSleep
 */
class respSnoring extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'respsnoring';
    public $timestamps = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'stopBangScore',
        'sleepStudy',
        'cpap',
        'OSAW',
        'duFSleep'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'stopBangScore' => 'integer',
        'sleepStudy' => 'string',
        'cpap' => 'string',
        'OSAW' => 'string',
        'duFSleep' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'stopBangScore' => 'nullable|integer',
        'sleepStudy' => 'nullable|string|max:3',
        'cpap' => 'nullable|string|max:3',
        'OSAW' => 'nullable|string|max:3',
        'duFSleep' => 'nullable|string|max:3',
        'deleted_at' => 'nullable'
    ];

    
}
