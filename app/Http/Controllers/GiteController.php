<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class GiteController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /** Page d'accueil du site */
    public function index(){
    	return view('pages.home');
	}	

	/** Page de contact du site */
    public function contact(){
    	return view('pages.contact');
	}	

	/** Page de tarifs */
    public function tarifs(){
    	return view('pages.tarifs');
	}	
}