<?php

namespace App\Repositories;

use App\Models\Callmetadata;
use App\Repositories\BaseRepository;

/**
 * Class CallmetadataRepository
 * @package App\Repositories
 * @version September 15, 2019, 10:32 pm UTC
*/

class CallmetadataRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nome',
        'Starttime',
        'Endtime',
        'Duration',
        'Phone'
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
        return Callmetadata::class;
    }
}
