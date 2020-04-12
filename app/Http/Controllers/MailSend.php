<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Mail\SendMail;


class MailSend extends Controller
{
    public function mailsend()
    {
        $details = [
            'title' => 'Title: Mail from Real Programmer',
            'body' => 'Body: This is for testing email using smtp'
        ];

        \Mail::to('khadidja@gmail.com')->send(new SendMail($details));
        return view('emails.thanks');
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        Mail::to('khadidjabrr71@gmail.com')->send(new ContactFormMail($data));

        return redirect('contact')
            ->with('message', 'Thanks for your message. We\'ll be in touch.');
    }

    Mail::send('mail',$data,function($message) use ($to_name,$to_email){
        $message->to($to_email)->subject('Postulation');
}