<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class logement extends Model
{
    public function zone()
{ 
    return $this->belongsTo(Zone::class); 
}

}
