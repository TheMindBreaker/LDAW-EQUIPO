<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class users
 * @package App\Models
 * @version October 29, 2020, 2:28 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $publishedProducts
 * @property \Illuminate\Database\Eloquent\Collection $titleCatalogs
 * @property \Illuminate\Database\Eloquent\Collection $userInteresteds
 * @property string $userName
 * @property string $userEmail
 * @property string $userPassword
 * @property integer $userRol
 */
class users extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'userName',
        'userEmail',
        'userPassword',
        'userRol'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'userName' => 'string',
        'userEmail' => 'string',
        'userPassword' => 'string',
        'userRol' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'userName' => 'required|string|max:255',
        'userEmail' => 'required|string|max:255',
        'userPassword' => 'required|string|max:255',
        'userRol' => 'nullable|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function publishedProducts()
    {
        return $this->hasMany(\App\Models\PublishedProduct::class, 'pubCreator');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function titleCatalogs()
    {
        return $this->belongsToMany(\App\Models\TitleCatalog::class, 'title_catalog_comments');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function userInteresteds()
    {
        return $this->hasMany(\App\Models\UserInterested::class, 'intUser');
    }
}
