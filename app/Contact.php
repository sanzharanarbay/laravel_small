<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'client_id','client_name', 'email', 'title','message',
    ];

    public function responses()
    {
        return $this->hasOne('App\Response','id');
    }
}
