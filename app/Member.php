<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
   
    public function contributions(){
        return $this->hasMany(Contribution::class);
    }

    public function memberships(){
        return $this->hasMany(Membership::class);
    }


    
}
