<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('concerts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("titre");
            $table->string("artiste");
            $table->string("genre");
            $table->string("description");
            $table->string("organisateur");
            $table->string("date");
            $table->string("lieu");
            $table->string("imgartiste");
            $table->string("imglieu");
            $table->integer("reservations");
            $table->integer("reservationsmax");
            $table->boolean("full");
        });

        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->id("concert");
            $table->string("user");
            $table->string("nbreservation");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concerts');
    }
};
