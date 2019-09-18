<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Invoiceedpoint
 * @package App\Models
 * @version September 15, 2019, 11:48 pm UTC
 *
 * @property string shouldquery
 * @property string customercode
 * @property integer allinvoicescustomer
 */
class Invoiceedpoint extends Model
{

    public $table = 'Invoiceedpoint';
    
    public $timestamps = false;


    protected $primaryKey = 'Codigo';

    public $fillable = [
        'shouldquery',
        'customercode',
        'allinvoicescustomer'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Codigo' => 'integer',
        'shouldquery' => 'string',
        'customercode' => 'string',
        'allinvoicescustomer' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Codigo' => 'required'
    ];

    
}
