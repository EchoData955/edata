<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:150',
            'message' => 'required|string|min:5|max:2000',
            'agree'   => 'accepted',
        ], [
            'agree.accepted' => 'يجب الموافقة على سياسة الخصوصية.',
        ]);

        $data['ip'] = $request->ip();
        $data['user_agent'] = $request->userAgent();

        ContactMessage::create($data);

        return back()->with('success', 'تم إرسال الرسالة بنجاح ✅');
    }
}
