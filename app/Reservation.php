<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model{
	public $timestamps = false;

	function getDateDebutFormatee(){
		return $this->formatDate($this->date_debut);
	}

	function getDateFinFormatee(){
		return $this->formatDate($this->date_fin);
	}

	function formatDate($date){
		$dateExplosee = explode("-", $date);
        return $dateExplosee[2].'/'.$dateExplosee[1].'/'.$dateExplosee[0];
	}
}
