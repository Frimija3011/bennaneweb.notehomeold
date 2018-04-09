<?php

namespace App\Repositories;

use Illuminate\Contracts\Auth\Guard;

use DB;

use App\Models\Note;
use App\Models\Category;

class NoteRepository
{

	/**
	 * Instance de Guard.
	 *
	 * @var Guard
	 */
	protected $auth;

	/**
	 * Crée une nouvelle instance de NoteRepository
	 *
	 * @param Illuminate\Contracts\Auth\Guard $auth
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
            $this->auth = $auth;
	}

        /**
	 * Récupération des sondages existants
	 *
	 * @param  integer $n
	 * @return array
	 */
	public function getPaginate($n)
	{
            $notes = Note::paginate($n);

            return compact('notes');
	}

	/**
	 * Récupération note par son id
	 *
	 * @param  integer $id
	 * @return void
	 */
	public function getById($id)
	{
            return Note::find($id);
	}
        
        /**
         * Récupérer toutes les catégories
         * 
         * @return type
         */
        public function getAll($category = false) {
            if ($category) {
                $results = DB::table('notes')
                        ->join('categories', 'notes.categorie_note', '=', 'categories.id_category')
                        ->select('notes.*', 'categories.icone_category')
                        ->where('notes.categorie_note', '=', $category)
                        ->orderby('updated_at', 'DESC')
                        ->get();
                
            } else {
                $results = DB::table('notes')
                        ->join('categories', 'notes.categorie_note', '=', 'categories.id_category')
                        ->select('notes.*', 'categories.icone_category')
                        ->get();
            }
            return $results;
        }
        
        public function getByCategory(Category $categorie) {
            return Category::where('');
        }

}