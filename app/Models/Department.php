<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Department extends Model
{use HasFactory;
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