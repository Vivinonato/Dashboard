<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CustomerCPF
 * @package App\Models
 * @version September 13, 2019, 2:20 am UTC
 *
 * @property string search_client_code
 * @property string CPF
 * @property string Name
 * @property string Email
 * @property string Phone
 * @property string Address
 */
class CustomerCPF extends Model
{

    public $table = 'CustomerCPF';
    
    public $timestamps = false;


    protected $primaryKey = 'id';

    public $fillable = [
        'search_client_code',
        'CPF',
        'Name',
        'Email',
        'Phone',
        'Address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'search_client_code' => 'string',
        'CPF' => 'string',
        'Name' => 'string',
        'Email' => 'string',
        'Phone' => 'string',
        'Address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'search_client_code' => 'required'
    ];

    
}
