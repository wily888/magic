<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandeDePrestationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demande_prestations', function (Blueprint $table) {
            $table->id();
            $table->string('Prestation_demande');
            $table->string('mode_travail');
            $table->string('salaire_propose');
            $table->string('age_prestataire');
            $table->string('ethnie');
            $table->string('date_execution_demande');
            $table->string('date_appel');
            $table->longText('observation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('demande_de_prestations');
    }
}