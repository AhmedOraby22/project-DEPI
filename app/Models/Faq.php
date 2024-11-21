<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{

    use HasFactory;

  
    protected $table = 'faqs1'; 

    // تحديد الحقول القابلة للتعبئة

    protected $fillable = [
        'question',
        'answer',
    ];


    
    public $timestamps = true;





}
