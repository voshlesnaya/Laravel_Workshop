<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:30',
            'email'   => 'nullable|email|max:255',
            'message' => 'nullable|string|max:2000',
            'consent' => 'required|accepted',
        ], [
            'name.required'    => 'Пожалуйста, укажите ваше имя.',
            'phone.required'   => 'Пожалуйста, укажите номер телефона.',
            'consent.accepted' => 'Необходимо согласие на обработку данных.',
        ]);

        Log::info('Contact form', $validated);

        // Mail::to('info@mds.ru')->send(new \App\Mail\ContactMail($validated));

        return back()->with('success', 'Ваша заявка принята! Мы свяжемся с вами в ближайшее время.');
    }
}
