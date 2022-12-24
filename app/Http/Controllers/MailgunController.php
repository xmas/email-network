<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MailgunController extends Controller
{
    public function store()
    {
        // app('log')->debug(request()->all());
        // app('log')->debug(request()->all())

        // Log::debug(array_keys(request()->all()));

        $msg = request()->all();

        // Log::debug($msg);

        // $attach = $msg['attachment-1'];
        // Log::debug($attach->get());

        // $attach->storePublicly('my_attach');
        // Log::debug($attach->getClientOriginalName());

        Log::debug($msg['From']);
        Log::debug($msg['To']);
        Log::debug($msg['stripped-text']);
        Log::debug($msg['stripped-signature']);

        
        return response()->json(['status' => 'ok']);
    }

}
