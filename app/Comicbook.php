<?php

namespace App;

class Comicbook extends Model
{
    
	public function artists()
	{
		return $this->hasMany(Artist::class);
	}

	public function series()
	{
		return $this->hasMany(Series::class);
	}

}
