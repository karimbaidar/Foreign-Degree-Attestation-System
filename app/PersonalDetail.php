<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    protected $table="personal_details";

    public function nationality(){
    	return $this->belongsTo('App\Nationality','nationality_id');
    }

    public function provisional_qualification() {
    	return $this->hasOne('App\ProvisionalQualification');
  	}
}
