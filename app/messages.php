<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    public $timestamps = false; //ignore created at  , updated at time in db
    protected $fillable=['user_from','user_to','date'];

    public function messages_reply()
    {
        return $this->hasMany(messages_replay::class , 'messages_id');
    }
    public function user_from()
    {
        return $this->belongsTo(User::class , 'user_from');
    }
    public function user_to()
    {
        return $this->belongsTo(User::class , 'user_to');
    }
}
