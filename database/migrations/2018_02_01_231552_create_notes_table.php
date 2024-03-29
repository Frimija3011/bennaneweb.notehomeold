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
            
            $table->increments('id');
            
            $table->string('titre');
            $table->text('contenu');
            $table->integer('categorie_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->tinyInteger('etat');
            
            // F.K
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
            
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
