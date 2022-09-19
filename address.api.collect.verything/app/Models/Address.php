<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, mixed $accountId)
 */
class Address extends Model
{
    use HasFactory, SoftDeletes;
    protected $dates = ['deletedAt'];
    const DELETED_AT = 'deletedAt';
    protected $connection = 'data';
    protected $table = 'addresses';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [
        'title',
        'addressLine1',
        'addressLine2',
        'zipCode',
        'city',
        'country',
        'latitude',
        'longitude',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
    ];

//    protected static function boot()
//    {
//        parent::boot();
//        Address::saving(function ($model) {
//                $model->id = "address".rand();
//
//        });
//    }
}
