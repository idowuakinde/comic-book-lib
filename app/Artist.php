<?php

namespace App;

class Artist extends Model
{

    public function comicbooks()
    {
    	return $this->belongsTo(Comicbook::class);
    }

    public function roles()
	{
		return $this->belongsTo(Role::class);
	}

}
