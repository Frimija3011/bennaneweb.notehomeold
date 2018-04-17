<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Category;
use App\Models\Partage;
use Illuminate\Support\Facades\DB;
use App\Repositories\NoteRepository;
use App\Repositories\CategoryRepository;

class NoteController extends Controller
{
    protected $noteRepository;
    protected $categoryRepository;
    
    function __construct(NoteRepository $noteRepository, CategoryRepository $categoryRepository) {
        $this->middleware('auth');
        $this->noteRepository = $noteRepository;
        $this->categoryRepository = $categoryRepository;
    }
    
    public function listByCourses() {
        
        $data = array();
        
        $data['all_notes'] = Note::with('categorie')->where('categorie_id', 1)->get();    
        
        $data['categories'] = Category::all();    
        
        $data['category'] = Category::find(1);
        
        foreach ($data['categories'] as $category) {
            $nbCategory = 0;
            foreach ($data['all_notes'] as $note) {
                if ($note->categorie->id == $category->id) {
                    $nbCategory++;
                }
            }
            $category->number = $nbCategory; 
        }
        
        $array3 = array();
        $partages = Partage::all();
        foreach ($data['all_notes'] as $note) {
            foreach ($partages as $partage) {
                if ($partage->note_id == $note->id) {
                    array_push($array3, $note->id);
                }
            }
        }
        $data['partages'] = $array3;
        
        /*$data = $this->noteRepository->getPaginate(4);        
        $data['categories'] = $this->categoryRepository->getAll();        
        $data['notes'] = $this->noteRepository->getAll(1);
        
        // icones
        $array1 = array();
        $icones = ['Leclerc (10/02/2018)', 'Carrefour (11/02/2018)', 'Lidl (12/02/2018)', 'Marché (09/02/2018)', 'Magasin Bio (09/02/2018)', 'Pharmacie ste-luce (05/02/2018)'];        
        // routes
        $array2 = array();
        $routes = ['courses/all', 'congelateur/all', 'taches/all', 'ecole/all', 'voiture/all', 'boucher/all'];
        // partage ou pas
        $array3 = array();
        $partages = Partage::all();
        foreach ($data['notes'] as $note) {
            foreach ($partages as $partage) {
                if ($partage->note == $note->id_note) {
                    array_push($array3, $note->id_note);
                }
            }
        }
        $i=0;
        foreach ($data['categories'] as $item) {
            $array1[$item->id_category] = $icones[$i];
            $i++;
        }
        $j=0;
        foreach ($data['categories'] as $item) {
            $array2[$item->id_category] = $routes[$j];
            $j++;
        }
        $data['category'] = $data['categories'][0];
        
        $data['icones'] = $array1;
        $data['links'] = $array2;
        $data['partages'] = $array3;*/
        
        return view('notes/index', $data);
    }
    
    public function detailCourse($id) {        
        $data['note'] = DB::table('notes')->where('id', $id)->first(); 
        return view('notes/edit', $data);
    }
    
    public function newCourse(Request $request) {
        $data = [ ];
        return view('notes/edit', $data);
    } 
    
    public function updateCourse(Request $request) {
        
        $idNote = $request->input('idNote');
        
        // Nouvelle note
        $note = new Note();
        
        if ($idNote > 0) {
            // Modification
            $note = Note::find($idNote);
        }
        $note->titre = $request->input('titreNote');
        $note->contenu = $request->input('contenuNote');
        $note->categorie_id = 1;
        $note->user_id = Auth::user()->id;
        $note->etat = 1;
        $note->save();
        
        return redirect()->route('all-courses')->with('noteCoureUpdated', 'Note mise à jour avec succès');
    }
    
    public function listByCongelateur() {
        
    }
    
    public function listByTaches() {
        
    }
    
    public function listByEcole() {
        
    }
    
    public function listByVoiture() {
        
    }
    
    public function listByBoucher() {
        
    }
}
