<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Message;

class MailgunController extends Controller
{
    public function store()
    {
        $req = request()->all();

        // Log::debug($req);


        $message = new Message;
        $message->stripped_text = $req['stripped-text'];
        $message->stripped_signature = $req['stripped-signature'];

        $message->from_user_account = 1;
        
        // $message->from = $req['from'];

        $message->save();

        // $to = $req['To'];


        Log::debug($req['To']);

        
        return response()->json(['status' => 'ok']);
    }

}
