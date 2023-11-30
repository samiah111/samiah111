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
        Schema::create('team_to__team_matchings', function (Blueprint $table) {
            $table->id();
         //   $table->foreignId('team_id')->references('id')->on('teams')->onDelete('cascade')->onUpdate('cascade');
          //  $table->foreignId('club_id')->references('id')->on('clubs')->onDelete('cascade')->onUpdate('cascade');
          //  $table->foreignId('location_id')->references('id')->on('locations')->onDelete('cascade')->onUpdate('cascade');
         //   $table->foreignId('sport_type_id')->references('id')->on('sport_types')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('start_time')->nullable()->comment("Match start time");
            $table->dateTime('end_time')->nullable()->comment("Match end time");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_to__team_matchings');
    }
};
