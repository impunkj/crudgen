<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class renalStones
 * @package App\Models
 * @version September 23, 2021, 9:11 am UTC
 *
 * @property integer $patientNo
 * @property string $SurgeryNeeded
 * @property integer $status
 * @property string $whatSurgery
 */
class renalStones extends Model
{
    use SoftDeletes;

    use HasFactory;

	public $timestamps = true;
	
    public $table = 'renalstones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'SurgeryNeeded',
        'status',
        'whatSurgery'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'SurgeryNeeded' => 'string',
        'status' => 'string',
        'whatSurgery' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'SurgeryNeeded' => 'nullable|string|max:8',
        'status' => 'nullable|string',
        'whatSurgery' => 'nullable|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
