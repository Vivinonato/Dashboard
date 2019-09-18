<?php

namespace App\Repositories;

use App\Models\CustomerCPF;
use App\Repositories\BaseRepository;

/**
 * Class CustomerCPFRepository
 * @package App\Repositories
 * @version September 13, 2019, 2:20 am UTC
*/

class CustomerCPFRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'search_client_code',
        'CPF',
        'Name',
        'Email',
        'Phone',
        'Address'
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
        return CustomerCPF::class;
    }
}
