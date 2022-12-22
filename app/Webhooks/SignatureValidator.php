<?php
namespace App\Webhooks;

use Illuminate\Http\Request;
use Spatie\WebhookClient\WebhookConfig;

class SignatureValidator implements \Spatie\WebhookClient\SignatureValidator\SignatureValidator
{
    public function isValid(Request $request, WebhookConfig $config): bool {
        return true;
    }
}