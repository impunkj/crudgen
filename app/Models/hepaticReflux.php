<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class hepaticReflux
 * @package App\Models
 * @version October 2, 2021, 6:11 pm UTC
 *
 * @property integer $patientNo
 * @property string $reflux
 */
class hepaticReflux extends Model
{
    use SoftDeletes;

    use HasFactory;
	
	public $timestamps = true;

    public $table = 'hepaticreflux';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'reflux'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'reflux' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'reflux' => 'nullable|string|max:3',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
