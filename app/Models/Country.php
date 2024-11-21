<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name',
        'status',
    ];
    protected $table = 'countries';
    public $timestamps = true;

    public function city()
    {
        return $this->hasMany(City::class);
    }
}