<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'pesan' => $request->input('message'),
        ];

        $email_target = 'terit5465@gmail.com';

        Mail::to($email_target)->send(new sendEmail($data));

        return redirect()->back()->with('success', 'Email berhasil dikirim');
    }
}