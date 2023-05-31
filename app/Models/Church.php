<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    protected $fillable = [
        'name',
        'address',
    ];

    public function funerals()
    {
        return $this->hasMany(Funeral::class);
    }
}
