<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @method static where(string $string, mixed $accountId)
 */
class Account extends Model
{
    use HasFactory, SoftDeletes, HasFactory;
    protected $dates = ['deletedAt'];
    const DELETED_AT = 'deletedAt';
    protected $connection = 'data';
    protected $table = 'accounts';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
    * The attributes that are mass assignable.
    *
    * @var array<int, string>
    */
    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'passwordForgottenToken',
        'passwordForgottenTokenLimit'
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
//        Account::saving(function ($model) {
//                $model->id = "account".rand();
//                $model->accountNumber = rand();
//                $model->password = md5($model->password);
//
//        });
//    }
}
