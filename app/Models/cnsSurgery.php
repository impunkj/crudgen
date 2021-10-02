<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class cnsSurgery
 * @package App\Models
 * @version September 23, 2021, 6:14 am UTC
 *
 * @property integer $patientNo
 * @property integer $brain
 * @property integer $spinal
 * @property string $brainwSurgery
 * @property string $brainREffect
 * @property string $spinalwSurgery
 * @property string $spinalREffect
 */
class cnsSurgery extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cnssurgery';
	
	public $timestamps = true;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'brain',
        'spinal',
        'brainwSurgery',
        'brainREffect',
        'spinalwSurgery',
        'spinalREffect'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'brain' => 'integer',
        'spinal' => 'integer',
        'brainwSurgery' => 'string',
        'brainREffect' => 'string',
        'spinalwSurgery' => 'string',
        'spinalREffect' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'brain' => 'nullable|integer',
        'spinal' => 'nullable|integer',
        'brainwSurgery' => 'nullable|string',
        'brainREffect' => 'nullable|string',
        'spinalwSurgery' => 'nullable|string',
        'spinalREffect' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
