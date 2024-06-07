<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->datetime('date_publication');
            $table->integer('nombre_page');
            $table->string('auteur');
            $table->string('isbn');
            $table->string('editeur');
            $table->unsignedBigInteger('rayon_id');
            $table->timestamps();

            // Définir la clé étrangère
            $table->foreign('rayon_id')->references('id')->on('rayons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('livres', function (Blueprint $table) {
            $table->dropForeign(['rayon_id']);
        });
        Schema::dropIfExists('livres');
    }
}
