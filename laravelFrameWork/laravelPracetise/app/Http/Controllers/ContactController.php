<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactForm(Request $request)
    {
        $name = $request->cookie('name');
        $email = $request->cookie('email');
        return view('contact')->with(['name'=>$name,'email'=>$email]);
    }
    public function insertMessage(Request $request)
    {
        $name = $request->input('name');
        $title = $request->input('title');
        $message = $request->input('message');
        $email = $request->input('email');
        $minutes = 30;
        $name_cookie = cookie('name',$name,$minutes);
        $email_cookie = cookie('email',$email,$minutes);
        $data = ['success'=>'Bạn đã gửi tin nhắn thành công!'];
        return response()
                ->view('contact',$data,200)
                ->withCookie($name_cookie)
                ->withCookie($email_cookie);
    }
}
