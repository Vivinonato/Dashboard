<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Customer
 * @package App\Models
 * @version September 16, 2019, 3:29 am UTC
 *
 * @property integer id_person
 * @property integer id_company
 * @property string code
 */
class Customer extends Model
{

    public $table = 'customer';
    
    public $timestamps = false;


    protected $primaryKey = 'id';

    public $fillable = [
        'id_person',
        'id_company',
        'code'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_person' => 'integer',
        'id_company' => 'integer',
        'code' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_person' => 'required',
        'id_company' => 'required',
        'code' => 'required'
    ];

    
}
