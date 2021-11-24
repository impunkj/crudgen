<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class respAsthma
 * @package App\Models
 * @version September 23, 2021, 4:06 am UTC
 *
 * @property integer $patientNo
 * @property string $whatCause
 * @property string $treatment
 * @property integer $hlyy
 * @property integer $hlmm
 * @property integer $hldd
 * @property integer $layy
 * @property integer $lamm
 * @property integer $ladd
 * @property string $howDoyouTreat
 * @property string $urti
 * @property integer $advised
 */
class respAsthma extends Model
{
    use SoftDeletes;

    use HasFactory;

    
	public $table = 'respasthma';
    
	public $timestamps = true;
	
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'patientNo',
        'whatCause',
        'treatment',
        'hlyy',
        'hlmm',
        'hldd',
        'layy',
        'lamm',
        'ladd',
        'howDoyouTreat',
        'urti',
        'advised'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'patientNo' => 'integer',
        'whatCause' => 'string',
        'treatment' => 'string',
        'hlyy' => 'integer',
        'hlmm' => 'integer',
        'hldd' => 'integer',
        'layy' => 'integer',
        'lamm' => 'integer',
        'ladd' => 'integer',
        'howDoyouTreat' => 'string',
        'urti' => 'string',
        'advised' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'patientNo' => 'nullable|integer',
        'whatCause' => 'nullable|string',
        'treatment' => 'nullable|string',
        'hlyy' => 'nullable|integer',
        'hlmm' => 'nullable|integer',
        'hldd' => 'nullable|integer',
        'layy' => 'nullable|integer',
        'lamm' => 'nullable|integer',
        'ladd' => 'nullable|integer',
        'howDoyouTreat' => 'nullable|string|max:12',
        'urti' => 'nullable|string|max:3',
        'advised' => 'nullable|integer',
        'deleted_at' => 'nullable'
    ];

    
}
