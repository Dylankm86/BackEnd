<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoertuigInstructeursTable extends Migration
{
    public function up()
    {
        Schema::create('voertuig_instructeurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('voertuig_id')->constrained('voertuigen');
            $table->foreignId('instructeur_id')->constrained('instructeurs');
            $table->date('datum_toekenning');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voertuig_instructeurs');
    }
}



