<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    // عرض صفحة الأسئلة المتكررة
    public function index()
    {
        $faqs1 = Faq::all();
        return view('web.faq', compact('faqs1'));
    }

    // إضافة سؤال جديد (إذا أردت إنشاء لوحة إدارة)
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        Faq::create($request->all());

        return redirect()->route('web.faq')->with('success', 'FAQ added successfully');
    }
}
