<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table = 'messages';

    public static $rules =
        [
            'name' => 'required|max:50',
            'email' => 'email|required|max:100',
            'phone' => 'min:7|max:15',
            'message' => 'required|max:1000',
        ];
}
