<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'status',
        'country_id'
    ];
    protected $table = 'cities';
    public $timestamps = true;

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}