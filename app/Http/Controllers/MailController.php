<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Email;



class MailController extends Controller {

    public function index()
    {
        $mails = Email::all();
        return view('mails.index')->with('mails', $mails);
    }

    public function create()
    {
        return view('mails.create');
    }

    public function store(Request $request)
    {
        $mail = new Email();
        $mail->subject = $request->input('subject');
        $mail->body = $request->input('body');
//        $mail->attachments = $request->input('attachments');
        $mail->save();
        return redirect('/admin/mails')->with('success', 'Email Created');
    }

    public function show(Email $mail)
    {
        return view('mails.show')->with('mail', $mail);
    }

    public function edit(Email $mail)
    {
        return view('mails.edit')->with('mail', $mail);
    }

    public function update(Request $request, Email $mail)
    {
        $mail->subject = $request->input('subject');
        $mail->body = $request->input('body');
        $mail->attachments = $request->input('attachments');
        $mail->save();

        return redirect('/admin/mails')->with('success', 'Email Updated');
    }

    public function destroy(Email $mail)
    {
        $mail->delete();
        return redirect('/admin/mails')->with('success', 'Email Deleted');
    }


    public function basic_email() {
        $data = array('name'=>"Shoaib");
        Mail::send(['text'=>'mail'], $data, function($message) {
            $message->to('abdullahkhan311995@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Email');
            $message->from('admin@comparethehajjmarkets.com','Hajj Umrah');
        });
        echo "Basic Email Sent. Check your inbox.";
    }
    public function html_email() {
        $data = array('name'=>"Shoaib");
        Mail::send('mail', $data, function($message) {
            $message->to('abdullahkhan311995@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Email');
            $message->from('admin@comparethehajjmarkets.com','Hajj Umrah');
        });
        echo "HTML Email Sent. Check your inbox.";
    }
    public function attachment_email() {
        $data = array('name'=>"Shoaib");
        Mail::send('mail', $data, function($message) {
            $message->to('abdullahkhan311995@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Email with Attachment');
            $message->attach('C:\info.txt');
            $message->from('admin@comparethehajjmarkets.com','Hajj Umrah');
        });
        echo "Email Sent with attachment. Check your inbox.";
    }
}