<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
	protected $fillable=['team_od','name'];

    public function players()
    {
    	return $this->belongsTo('App\Team');
    }
}
