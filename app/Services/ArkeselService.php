<?php


namespace App\Services;

use Illuminate\Support\Facades\Http;

class ArkeselService
{
    public static function sendSMS($phone, $message)
    {
        $apiKey = config('services.arkesel.key');
        $senderId = config('services.arkesel.sender_id');

        return Http::withHeaders([
            'api-key' => $apiKey,
        ])->post('https://sms.arkesel.com/api/v2/sms/send', [
            'sender' => $senderId,
            'message' => $message,
            'recipients' => [$phone],
        ]);
    }
}
