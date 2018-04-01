<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function(Blueprint $table) {
            $table->increments('id_categories');
            $table->string('titre_categories');
            $table->string('couleur_categories');
            $table->string('icone_categories');
            $table->timestamps();         
            $table->softDeletes();
        });
        DB::table('categories')->insert(
            [
                ['titre_categories' => 'Courses', 'couleur_categories' => 'palegoldenrod', 'icone_categories' => 'fa-shopping-cart'],
                ['titre_categories' => 'Congélateur', 'couleur_categories' => '#a6e1ec', 'icone_categories' => 'fa-snowflake-o'],
                ['titre_categories' => 'Tâches', 'couleur_categories' => '#c1e2b3', 'icone_categories' => 'fa-tasks'],
                ['titre_categories' => 'Enfants', 'couleur_categories' => '#f2dede', 'icone_categories' => 'fa-edit'],
                ['titre_categories' => 'Voiture', 'couleur_categories' => '#eee', 'icone_categories' => 'fa-car'],
                ['titre_categories' => 'Boucher', 'couleur_categories' => '#c7ddef', 'icone_categories' => 'fa-shopping-basket']
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categories');  
    }
}
