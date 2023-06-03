<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'birthday',
        'city',
        'role_id',
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
