<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use HasApiTokens, Authenticatable;

    protected $fillable = [
        'name',
        'surname',
        'birthday',
        'city',
        'role_id',
        'email',
        'password',
    ];

    protected $dates = ['birthday'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function funerals()
    {
        return $this->hasMany(Funeral::class);
    }
}
