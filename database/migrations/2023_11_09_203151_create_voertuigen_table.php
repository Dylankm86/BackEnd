<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoertuigenTable extends Migration
{
    public function up()
    {
        Schema::create('voertuigen', function (Blueprint $table) {
            $table->id();
            $table->string('kenteken');
            $table->string('type');
            $table->date('bouwjaar');
            $table->string('brandstof');
            $table->foreignId('type_voertuig_id')->constrained('type_voertuigen');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('voertuigen');
    }
}

