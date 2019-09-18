<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Invoice
 * @package App\Models
 * @version September 14, 2019, 3:32 pm UTC
 *
 * @property string code
 * @property integer id_customer
 * @property string|\Carbon\Carbon created_at
 */
class Invoice extends Model
{

    public $table = 'invoice';
    
    public $timestamps = false;


    protected $primaryKey = 'id';

    public $fillable = [
        'code',
        'id_customer',
        'created_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'id_customer' => 'integer',
        'created_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
