<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages_replay extends Model
{
    protected $table = 'messages_replay';
    public $timestamps = false;
    protected $fillable = ['msg', 'messages_id'];
}
