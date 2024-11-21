<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function up()
{
    Schema::create('patients', function (Blueprint $table) {
        $table->id();
        $table->string('name');
     
        $table->string('phone');
        $table->string('branch');
        $table->string('specialty');
        $table->date('reservation_date');
        $table->timestamps();
    });
}

    use HasFactory;
}
