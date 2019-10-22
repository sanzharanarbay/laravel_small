<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    protected $fillable = [
        'contact_id','client_id','client_name','response_text','message',
    ];
    public function contacts()
    {
        return $this->belongsTo('App\Contact','contact_id','id');
    }

}
