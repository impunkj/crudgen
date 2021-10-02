<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class cnsCognitive
 * @package App\Models
 * @version September 23, 2021, 6:25 am UTC
 *
 * @property integer $patientNo
 * @property integer $MiniCogScore
 * @property integer $PatientAten
 * @property integer $PharseTest
 */
class cnsCognitive extends Model
{
    use SoftDeletes;

    use HasFactory;
	
	public $timestamps = true;

    public $table = 'cnscognitive';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'MiniCogScore',
        'PatientAten',
        'PharseTest'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'MiniCogScore' => 'integer',
        'PatientAten' => 'integer',
        'PharseTest' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'MiniCogScore' => 'required|integer',
        'PatientAten' => 'required|integer',
        'PharseTest' => 'required|integer',
    ];

    
}
