<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMe extends Model
{
    protected $fillable = ['name', 'subject', 'email', 'content'];
}
