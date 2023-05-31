<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Priest extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'religion',
    ];

    public function funerals()
    {
        return $this->hasMany(Funeral::class);
    }
}
