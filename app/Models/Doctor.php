<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    // Specify the table if it's not the default plural form
    protected $table = 'doctors';

    // Define the fillable fields (for mass assignment protection)
    protected $fillable = [
        'name', 'specialty', 'email', 'phone'
    ];
}
