<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class SmsHelper
{
    public static function send($phone, $message)
    {
        $apiKey = config('services.arkesel.key');

        $response = Http::withHeaders([
            'api-key' => $apiKey,
            'Content-Type' => 'application/json',
        ])->post('https://sms.arkesel.com/api/v2/sms/send', [
            'sender' => 'Danix',
            'message' => $message,
            'recipients' => [$phone],
        ]);

        return $response->successful();
    }
}
