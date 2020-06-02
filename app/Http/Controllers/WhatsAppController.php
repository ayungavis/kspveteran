<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class WhatsAppController extends Controller
{
    protected $sender = "whatsapp:+14155238886";

    public function __construct()
    {
        $this->twilio = new Client(env('TWILIO_SID'), env('TWILIO_AUTH'));
    }

    public function send($to, $message)
    {
        try {
            $this->twilio->messages
                ->create("whatsapp:+62". $to,
                    [
                        "from" => $this->sender,
                        "body" => $message
                    ]
                );
        } catch (\Exception $e) {
            return view('errors.504');
        }
    }   
}