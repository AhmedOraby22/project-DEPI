<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name',
        'status',
        'avatar',
    ];
    protected $table = 'departments';
    public $timestamps = true;

    public function doctor()
    {
        return $this->hasMany(User::class);
    }
}