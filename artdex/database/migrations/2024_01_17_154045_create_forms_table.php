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
        Schema::create('pokemon_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pokemon_id')->constrained('pokemon')->onDelete('cascade');
            $table->string('name');
            $table->boolean('default')->default(false);
            $table->foreignId('type1_id')->nullable()->constrained('types')->onDelete('cascade');
            $table->foreignId('type2_id')->nullable()->constrained('types')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon_forms');
    }
};
