<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Callmetadata
 * @package App\Models
 * @version September 15, 2019, 10:32 pm UTC
 *
 * @property string Nome
 * @property time Starttime
 * @property string|\Carbon\Carbon Endtime
 * @property integer Duration
 * @property string Phone
 */
class Callmetadata extends Model
{

    public $table = 'Callmetadata';
    
    public $timestamps = false;


    protected $primaryKey = 'Codigo';

    public $fillable = [
        'Nome',
        'Starttime',
        'Endtime',
        'Duration',
        'Phone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Codigo' => 'integer',
        'Nome' => 'string',
        'Endtime' => 'datetime',
        'Duration' => 'integer',
        'Phone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Codigo' => 'required',
        'Nome' => 'required',
        'Endtime' => 'required'
    ];

    
}
