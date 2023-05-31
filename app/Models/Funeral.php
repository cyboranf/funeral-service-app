<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funeral extends Model
{
    protected $fillable = [
        'deceased_name',
        'deceased_age',
        'user_id',
        'coffin_id',
        'church_id',
        'priest_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function coffin()
    {
        return $this->belongsTo(Coffin::class);
    }

    public function church()
    {
        return $this->belongsTo(Church::class);
    }

    public function priest()
    {
        return $this->belongsTo(Priest::class);
    }
}
