<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Http;
use Laravel\Sanctum\HasApiTokens;

/**
 * @method static where(string $string, mixed $userId)
 * @property mixed accountId
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $dates = ['deletedAt'];
    const DELETED_AT = 'deletedAt';
    protected $connection = 'data';
    protected $table = 'users';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'addressId',
        'storeId',
        'accountId',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'addressId',
        'accountId',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
    ];

    protected $appends = ['account', 'address'];

    protected static function boot()
    {
        parent::boot();
        User::saving(function ($model) {
            $model->id = "user".rand();

        });
    }

    protected function getAccountAttribute()
    {
        $response = Http::get('localhost:8001/api/accounts/'.$this->accountId);
        return json_decode($response->body());
    }

    protected function getAddressAttribute()
    {
        $response = Http::get('localhost:8002/api/addresses/'.$this->addressId);
        return json_decode($response->body());
    }
}
