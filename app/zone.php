<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zone extends Model
{
    public function logement() 
{ 
    return $this->hasMany(logement::class); 
}

}
