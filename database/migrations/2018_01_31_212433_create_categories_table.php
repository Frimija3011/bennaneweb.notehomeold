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
            $table->increments('id');
            $table->string('titre');
            $table->string('couleur');
            $table->string('icone');
            $table->timestamps();         
            $table->softDeletes();
        });
        
        DB::table('categories')->insert(
            array(
                ['titre' => 'Courses', 'couleur' => 'palegoldenrod', 'icone' => 'fa-shopping-cart'],                
                ['titre' => 'Tâches', 'couleur' => '#c1e2b3', 'icone' => 'fa-tasks'],
                ['titre' => 'Enfants', 'couleur' => '#f2dede', 'icone' => 'fa-edit'],
                ['titre' => 'Voitures', 'couleur' => '#eee', 'icone' => 'fa-car']                
            )
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
