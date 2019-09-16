<?php

namespace App\Http\Controllers;

use App\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Purifier;

class ResponseController extends Controller
{
    public function sendComment(Request $request) {

        // print_r($request->all());exit;

        $this->validate($request, [
            'name' => 'required',
            'PIN' => 'required',
            'email' => 'required|email',
            'comment' => 'required'
        ]);
        
        //clean with Purifier facade            
        $cleaned_name = Purifier::clean($request['name']);
        $cleaned_pin = Purifier::clean($request['PIN']);
        $cleaned_comment = Purifier::clean(trim($request['comment']));

        //send cservice email
        $data = array(
            'email' => 'emmanuel.okpukpan@ieianchorpensions.com',
            // 'email' => 'cservice@ieianchorpensions.com',
            'pin' => $cleaned_pin,
            'comment' => preg_replace("/\r\n|\r|\n/", '<br/>', $cleaned_comment),
            'subject' => 'Feedback from ' . $cleaned_name . ' (' . $cleaned_pin . ')',
            'client_email' => trim($request['email']),
            'created_at' => Date('Y-m-d'),
            'clientname' => $cleaned_name
        );

        Mail::send('emails.mailComments', $data, function($message) use ($data) {
            $message->from($data['client_email']);
            $message->to($data['email']);
            $message->subject($data['subject']);
        });
    }
}
