<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactReply extends Model
{
    //
    public function contactMessage()
{
    return $this->belongsTo(\App\Models\ContactMessage::class);
}

}
