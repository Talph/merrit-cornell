<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //
    protected $fillable = [
        'first__name',
        'last__name',
        '__phone',
        '__email',
        '__message',
        '__document',
        '__terms'
    ];
}
