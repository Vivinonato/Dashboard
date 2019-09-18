<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CustomerCNPJ
 * @package App\Models
 * @version September 13, 2019, 2:27 am UTC
 *
 * @property string CNPJ
 * @property string Social_reason
 * @property string Municipal_registration
 * @property string State_registration
 * @property string Email_cnpj
 * @property string Phone_cnpj
 * @property string Address_cnpj
 */
class CustomerCNPJ extends Model
{

    public $table = 'CustomerCNPJ';
    
    public $timestamps = false;


    protected $primaryKey = 'id';

    public $fillable = [
        'CNPJ',
        'Social_reason',
        'Municipal_registration',
        'State_registration',
        'Email_cnpj',
        'Phone_cnpj',
        'Address_cnpj'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'CNPJ' => 'string',
        'Social_reason' => 'string',
        'Municipal_registration' => 'string',
        'State_registration' => 'string',
        'Email_cnpj' => 'string',
        'Phone_cnpj' => 'string',
        'Address_cnpj' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
