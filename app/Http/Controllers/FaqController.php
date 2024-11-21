<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    // عرض صفحة الأسئلة المتكررة
    public function index()
    {
        $faqs1 = Faq::all();
        return view('web.faqs.index', compact('faqs1'));
    }

    // إضافة سؤال جديد (إذا أردت إنشاء لوحة إدارة)
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        Faq::create($request->all());

        return redirect()->route('web.faqs.index')->with('success', 'FAQ added successfully');
    }
}
