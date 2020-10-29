<?php

namespace App\Repositories;

use App\Models\users;
use App\Repositories\BaseRepository;

/**
 * Class usersRepository
 * @package App\Repositories
 * @version October 29, 2020, 2:28 am UTC
*/

class usersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'userName',
        'userEmail',
        'userPassword',
        'userRol'
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
        return users::class;
    }
}
