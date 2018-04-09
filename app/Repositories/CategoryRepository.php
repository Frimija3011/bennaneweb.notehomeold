<?php

namespace App\Repositories;

use Illuminate\Contracts\Auth\Guard;

use App\Models\Category;

class CategoryRepository
{

	/**
	 * Instance de Guard.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Crée une nouvelle instance de CategoryRepository
	 *
	 * @param Illuminate\Contracts\Auth\Guard $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
            $this->auth = $auth;
	}


	/**
	 * Récupération catégorie par son id
	 *
	 * @param  integer $id
	 * @return void
	 */
	public function getById($id)
	{
            return Category::find($id);
	}
        
        /**
         * Récupérer toutes les catégories
         * 
         * @return type
         */
        public function getAll() {
            return Category::all();
        }

}