<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coffin extends Model
{
    protected $fillable = [
        'material',
        'color',
        'size',
    ];

    public function funerals()
    {
        return $this->hasMany(Funeral::class);
    }
}
