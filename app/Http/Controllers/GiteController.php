<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Reservation;
use Response;
use View;

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

    /** Page de tarifs */
    public function disponibilites(){
        return view('pages.disponibilites');
    }

    /** Page de tarifs */
    public function getGestionCalendrier(){

        $res = Reservation::all();

        return view('pages.gestionCalendrier')->with('res',  $res);
    }

    /** Page de tarifs */
    public function postGestionCalendrier(){

    }

    public function getLogin(){
        return view('pages.connexion');
    }

    public function postLogin(Request $request){

        // validate the info, create rules for the inputs
        $rules = array(
            'login'    => 'required', // make sure the email is an actual email
            'password' => 'required|alphaNum' // password can only be alphanumeric and has to be greater than 3 characters
        );

        // run the validation rules on the inputs from the form
        $validator = Validator::make($request->all(), $rules);

        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
             return redirect()->route('getLogin')
                                    ->withErrors($validator)
                                    ->withInput();
        } else {

            // create our user data for the authentication
            $userdata = array(
                'login'     => $request->input('login'),
                'password'  => $request->input('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {
                return redirect('gestionCalendrier');
            } else {        
                // validation not successful, send back to form 
                return redirect()->route('getLogin');

            }
        }
    }

    public function postDeconnection(){
        Auth::logout();
        return redirect('');
    }

    public function postSaveReservation(Request $request){

        $rules = array(
            'nom'    => 'required', 
            'dateDebut' => ['required','date_format:d/m/Y'],
            'dateFin' => ['required','date_format:d/m/Y']
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return Response::json(array(
                    'success' => false,
                    'errors' => $validator->getMessageBag()->toArray()));
        } else {

            $res = new Reservation;
            $res->nom = $request->nom;
            $res->date_debut = date("Y-m-d", strtotime(str_replace('/', '-', $request->dateDebut)));
            $res->date_fin = date("Y-m-d", strtotime(str_replace('/', '-', $request->dateFin)));
            $res->save();
            
            $res = Reservation::all();
            return View::make('pages.listeReservations', array('res' => $res));
        }

    }
}