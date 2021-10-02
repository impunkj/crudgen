<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class steroid
 * @package App\Models
 * @version October 2, 2021, 6:30 pm UTC
 *
 * @property integer $patientNo
 * @property string $supplement
 */
class steroid extends Model
{
    use SoftDeletes;

    use HasFactory;
	
	public $timestamps = true;

    public $table = 'steroid';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'supplement'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'supplement' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'nullable|integer',
        'supplement' => 'nullable|string|max:3',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
