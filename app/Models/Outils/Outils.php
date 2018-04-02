<?php

namespace App\Models\Outils;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Outils
 *
 * @author Lam3allam
 */
class Outils {
    
    /**
     * Catégories principales des notes
     */
    const COURSES_ROUTE = 'courses/all';
    const CONGELATEUR_ROUTE = 'congelateur/all';
    const TACHES_ROUTE = 'taches/all';
    const ECOLE_ROUTE = 'ecole/all';
    const VOITURE_ROUTE = 'voiture/all';
    const BOUCHER_ROUTE = 'boucher/all';
    
    const COULEUR_CAT_1 = 'palegoldenrod';
    const COULEUR_CAT_2 = '#a6e1ec';
    const COULEUR_CAT_3 = '#c1e2b3';
    const COULEUR_CAT_4 = '#f2dede';
    const COULEUR_CAT_5 = '#eee';
    const COULEUR_CAT_6 = '#c7ddef';
    
    static public function slugify($text)
    {
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
          return 'n-a';
        }

        return $text;
    }
    
}
