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
        Schema::create('mileages', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('inital_km');
            $table->string('rided_km');
            $table->float('fuel_filled');
            $table->string('km');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mileages');
    }
};
