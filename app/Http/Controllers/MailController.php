<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;

class MailController extends Controller
{
    public function send(Request $request){
    	$validator = Validator::make($request->all(), [
    		'name' => 'required',
    		'contact_person' => 'required',
    		'contact_phone' => 'required',
    		'is_agreement' => 'required'	
    	]);

    	if ($validator->fails()){
    		return redirect()->back()->withErrors($validator);
    	}
    	
    	Mail::send('emails.contact', $request->all(), function($message)
    	{
            try {
                $message->to('ddrenlin@gmail.com')->subject('報價通知');
                return redirect()->back();
            }catch(Exception $e) {
                return $e->getMessage();
            }
    		
            
    	});
    }
}
