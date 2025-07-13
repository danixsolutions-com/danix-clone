<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Notifications\ContactMessageNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification; // Use the correct facade
use App\Services\ArkeselService;

class ContactMessageController extends Controller
{
    //
public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone'  => 'required|string',
        'subject' => 'required|string|max:10000',
        'message' => 'required|string',
    ]);

    $contactMessage = ContactMessage::create($validated);

    // ✅ Send email notification to admin
    Notification::route('mail', 'info@danixsolutions.com')
        ->notify(new ContactMessageNotification($contactMessage));

    // ✅ Send SMS via Arkesel
    ArkeselService::sendSMS('233240161959', 'New contact from ' . $contactMessage->name . ': ' . $contactMessage->subject);

    return back()->with('success', 'Your message has been sent successfully!');
}
}
