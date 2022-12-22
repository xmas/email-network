<?php

namespace App\Webhooks;

use Spatie\WebhookClient\Jobs\ProcessWebhookJob as SpatieProcessWebhookJob;
use Illuminate\Support\Facades\Log;

class MailgunWebhookHandler extends SpatieProcessWebhookJob
{
    public function handle()
    {
        // $this->webhookCall // contains an instance of `WebhookCall`

        // perform the work here
        // return "we got the webhook call";
        // ddd($this->webhookCall);

        // Log::debug(array_keys($this->webhookCall->payload));
    
        // Log::debug(array_keys($this->webhookCall->payload));
        // Log::debug($this->webhookCall->payload['References']);
        // Log::debug($this->webhookCall->payload);
        
        // foreach ($this->webhookCall->payload as $key => $value) {

        //     Log::debug("==================");
        //     Log::debug($key . "\n\n");
        //     Log::debug($value);

        // }


        return 'test';
    }
}