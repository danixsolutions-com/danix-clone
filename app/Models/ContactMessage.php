<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    //
    protected $fillable = [
        'name',
        'email',
        'subject',
        'phone',
        'message',

    ];


    public function replies()
{
    return $this->hasMany(\App\Models\ContactReply::class);
}

}
