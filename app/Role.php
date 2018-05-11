<?php

namespace App;


class Role extends Model
{
    
    public function artists()
	{
		return $this->hasMany(Artist::class);
	}

}
