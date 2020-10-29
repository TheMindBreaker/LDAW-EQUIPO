<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class consoles
 * @package App\Models
 * @version October 29, 2020, 2:29 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $publishedProducts
 * @property \Illuminate\Database\Eloquent\Collection $publishedProductsAcceptances
 * @property \Illuminate\Database\Eloquent\Collection $userInteresteds
 * @property string $conName
 * @property string $conBrand
 */
class consoles extends Model
{
    use SoftDeletes;

    public $table = 'consoles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'conName',
        'conBrand'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'idConsole' => 'integer',
        'conName' => 'string',
        'conBrand' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'conName' => 'nullable|string|max:255',
        'conBrand' => 'nullable|string|max:255'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function publishedProducts()
    {
        return $this->hasMany(\App\Models\PublishedProduct::class, 'pubConsole');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function publishedProductsAcceptances()
    {
        return $this->hasMany(\App\Models\PublishedProductsAcceptance::class, 'accConsole');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function userInteresteds()
    {
        return $this->hasMany(\App\Models\UserInterested::class, 'intConsole');
    }
}
