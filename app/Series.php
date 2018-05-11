<?php

namespace App;


class Series extends Model
{
    
    public function comicbooks()
	{
		return $this->belongsTo(Comicbook::class);
	}
}
