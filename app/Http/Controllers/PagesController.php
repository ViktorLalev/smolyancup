<?php

namespace App\Http\Controllers;


use Mail;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Send Mail
     *
     * @return Response
     */
    
    public function sendEmail (Request $request)
    {
        $contactInformation = $request->all();
    
       
        Mail::send('theme.email',['body'=>$contactInformation['message']] , function($message) use ($contactInformation) {            
            $message->from($contactInformation['email']);
            $message->to('viktor.lalev@yahoo.com')->subject('[SmolyanCup] - Contact Form');
        });

        $response = array(
            'status' => 'success',
            'statusMessage' => 'Email sent successfully.'
        );

        return Response::json($response);
    }

    
}
