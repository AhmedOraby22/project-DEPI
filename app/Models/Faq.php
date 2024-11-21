<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    // تحديد اسم الجدول في قاعدة البيانات
    protected $table = 'faqs1'; // تأكد من أنك تستخدم الاسم الصحيح للجدول في قاعدة البيانات

    // تحديد الحقول القابلة للتعبئة
    protected $fillable = [
        'question',
        'answer',
    ];

    // إذا كنت تريد تفعيل الطوابع الزمنية (timestamps)
    public $timestamps = true;
}
