<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    public function members(){
        return $this->belongsTo(Member::class);
    }

    public function memberships(){
        return $this->hasMany(Membership::class);
    }
}
