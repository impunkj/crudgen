<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class cvsNyha
 * @package App\Models
 * @version September 23, 2021, 3:20 am UTC
 *
 * @property integer $patientNo
 * @property integer $Nclass
 */
class cvsNyha extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cvsnyha';
	
	public $timestamps = true;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'Nclass'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'Nclass' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'required|integer',
        'Nclass' => 'required|integer',

    ];

    
}
