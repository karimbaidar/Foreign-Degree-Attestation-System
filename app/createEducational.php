<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class createEducational extends Model
{
    protected $table="createEducational";

    public function nationality(){
    	return $this->belongsTo('App\Nationality','nationality_id');
    }

    public function provisional_qualification() {
    	return $this->hasOne('App\ProvisionalQualification');
  	}
}
