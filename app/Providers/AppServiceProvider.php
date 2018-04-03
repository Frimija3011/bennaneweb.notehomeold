<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Note;
use App\Models\Category;

class AppServiceProvider extends ServiceProvider
{
    protected $all_notes;    
    private $categories;
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->all_notes = Note::with('categorie')->get();            
        $this->categories = Category::all();
        
        foreach ($this->categories as $category) {
            $nbCategory = 0;
            foreach ($this->all_notes as $note) {
                if ($note->categorie->id == $category->id) {
                    $nbCategory++;
                }
            }
            $category->number = $nbCategory; 
        }
        
        view()->composer('layouts.app', function ($view) {
            $view->with( 
                [
                    'categories' => $this->categories,
                    'all_notes' => $this->all_notes
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
