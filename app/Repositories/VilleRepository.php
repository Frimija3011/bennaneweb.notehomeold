<?php

namespace App\Repositories;

use Illuminate\Contracts\Auth\Guard;
use App\Models\Ville;
use Illuminate\Support\Facades\Response;

class VilleRepository
{

	/**
	 * Instance de Guard.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Crée une nouvelle instance de VilleRepository
	 *
	 * @param Illuminate\Contracts\Auth\Guard $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}

	/**
	 * Récupération ville par son id
	 *
	 * @param  integer $id
	 * @return void
	 */
	public function getById($id)
	{
		return Ville::find($id);
	}
        
        /**
	 * Récupération des villes existantes
	 *
	 * @return array
	 */
	public function getAll()
	{
            $villes = Ville::all();
            $results = array();
            foreach ($villes as $query)
            {                
                array_push($results, $query->nom_villes);
            }
            return $results;
	}

        /**
	 * Récupération des villes autocomplete
	 *
	 * @return array
	 */
	public function getCitiesAC($param)
	{
            $retour = array();
            $villes_noms = Ville::where('nom_villes', 'like', ucfirst($param) . '%')->get();
            $villes_ids = Ville::where('nom_villes', 'like', ucfirst($param) . '%')->get();
            foreach ($villes_noms as $v1) {
                foreach ($villes_ids as $v2) {
                    if ($v1->id_villes == $v2->id_villes) {
                        array_push($retour, '<a class="linkCity" onclick="$(\'div#divIframe\').addClass(\'panel panel-primary\'); $(\'iframe#iframe\').attr(\'src\', \'https://fr.weather-forecast.com/locations/'.$v2->nom_villes.'/forecasts/latest/threedayfree\'); $(\'#idTextCity\').val(\''.$v2->nom_villes.'\'); " href="#" dir="'.$v2->latitude_decimal.'" download="'.$v2->longitude_decimal.'">'.$v1->nom_villes.'</a><br>');                        
                    }                    
                }                
            }
            return $retour;
	}
}