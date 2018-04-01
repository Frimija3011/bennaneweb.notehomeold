<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{   
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function(Blueprint $table) {
            $table->increments('id_notes');
            $table->string('titre_notes');
            $table->text('contenu_notes');
            $table->tinyInteger('categorie_notes');
            $table->integer('user_id');
            $table->tinyInteger('etat_notes');
            $table->timestamps();         
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notes');        
    }
}
