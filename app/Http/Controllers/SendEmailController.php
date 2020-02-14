<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
     return view('send_email');
    }

    function send(Request $request)
    {
     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required',
      'message' =>  'required',
      'receiverName' => 'required',
     ]);
    


        $data = array(
            'receiverName' => $request->receiverName,
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'message'   =>  $request->message,
            'subject'   =>  $request->subject,
           
        );

     Mail::to($data["email"])->send(new SendMail($data));
     return back()->with('success', 'Sent Success!!');

     
    }

   
}



?>

