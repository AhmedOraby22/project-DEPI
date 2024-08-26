<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // تحديد الجدول الذي ينتمي إليه هذا النموذج
    protected $table = 'profile';

    // تحديد الحقول القابلة للتعبئة (fillable)
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'password',
    ];

    // تحديد العلاقة بين نموذج Profile ونموذج User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
