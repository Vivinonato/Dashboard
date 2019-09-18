<?php

namespace App\Repositories;

use App\Models\CustomerCNPJ;
use App\Repositories\BaseRepository;

/**
 * Class CustomerCNPJRepository
 * @package App\Repositories
 * @version September 13, 2019, 2:27 am UTC
*/

class CustomerCNPJRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'CNPJ',
        'Social_reason',
        'Municipal_registration',
        'State_registration',
        'Email_cnpj',
        'Phone_cnpj',
        'Address_cnpj'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CustomerCNPJ::class;
    }
}
