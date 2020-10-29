<?php

namespace App\Repositories;

use App\Models\consoles;
use App\Repositories\BaseRepository;

/**
 * Class consolesRepository
 * @package App\Repositories
 * @version October 29, 2020, 2:29 am UTC
*/

class consolesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'conName',
        'conBrand'
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
        return consoles::class;
    }
}
