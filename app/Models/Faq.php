<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> 9cbbb0c879e90d128002f0c28c3d97280d4ab73e
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
<<<<<<< HEAD
    use HasFactory;

    // تحديد اسم الجدول في قاعدة البيانات
    protected $table = 'faqs1';

    // تحديد الحقول القابلة للتعبئة
    protected $fillable = ['question', 'answer'];
}
=======
    protected $fillable = [
        'question',
        'answer',
    ];
    protected $table = 'Faq';
    public $timestamps = true;

}
>>>>>>> 9cbbb0c879e90d128002f0c28c3d97280d4ab73e
