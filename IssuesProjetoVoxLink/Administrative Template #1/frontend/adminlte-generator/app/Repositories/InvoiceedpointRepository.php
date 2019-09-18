<?php

namespace App\Repositories;

use App\Models\Invoiceedpoint;
use App\Repositories\BaseRepository;

/**
 * Class InvoiceedpointRepository
 * @package App\Repositories
 * @version September 15, 2019, 11:48 pm UTC
*/

class InvoiceedpointRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'shouldquery',
        'customercode',
        'allinvoicescustomer'
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
        return Invoiceedpoint::class;
    }
}
