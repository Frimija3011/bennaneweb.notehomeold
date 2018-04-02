<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Note;

class AppServiceProvider extends ServiceProvider
{
    protected $notes_categorie_1 = array();    
    protected $notes_categorie_2 = array();
    protected $notes_categorie_3 = array();
    protected $notes_categorie_4 = array();
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $all_notes = Note::with('categorie')->get();        
        
        foreach ($all_notes as $note) {            
            switch($note->categorie->id) {
                case 1 : 
                    array_push($this->notes_categorie_1, $note);
                    break;
                case 2 : 
                    array_push($this->notes_categorie_2, $note);
                    break;
                case 3 :
                    array_push($this->notes_categorie_3, $note);
                    break;
                case 4 :
                    array_push($this->notes_categorie_4, $note);
                    break;
                default :
                    break;
            }
        }
        
        view()->composer('layouts.app', function ($view) {
            $view->with( 
                [
                    'nbCourses' => sizeof($this->notes_categorie_1) > 0 ? sizeof($this->notes_categorie_1) : 0 , 
                    'nbTaches' => sizeof($this->notes_categorie_2) > 0 ? sizeof($this->notes_categorie_2) : 0 , 
                ]
            );
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
