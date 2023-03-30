<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevenirPrestatairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devenir_prestataires', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('civilite');
            $table->string('date_naissance');
            $table->string('situation_matri');
            $table->string('nombre_enfant');
            $table->string('contact1');
            $table->string('contact2');
            $table->string('whatsapp');
            $table->string('adresse');
            $table->string('ethnie');
            $table->string('commune');
            $table->string('quartier');
            $table->string('photo');
            $table->string('activite');
            $table->string('anne_experience');
            $table->string('pretention_salariale');
            $table->string('zone_intervention');
            $table->string('personne_contacter');
            $table->string('reference');
            $table->string('reference_contact');
            $table->string('alphabetisation');
            $table->string('dernier_diplome');
            $table->string('mode_travail');
            $table->string('disponibilite');
            $table->string('nature_piece');
            $table->string('numero_piece');
            $table->string('rencontre_allo_service');
            $table->string('date_appel');
            $table->string('copie_piece');
            $table->string('copie_diplome');
            $table->string('catalogue');
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
        Schema::dropIfExists('devenir_prestataires');
    }
}
