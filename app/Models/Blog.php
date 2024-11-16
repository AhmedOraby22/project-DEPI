<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'name',
        'status',
        'avatar',
        'title',
        'description',
        'title',
    ];
    protected $table = 'blogs';
    public $timestamps = true;

}