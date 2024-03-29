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
        Schema::create('pokemon', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->string('name')->unique();
            $table->foreignId('generation_id')->constrained('generations')->onDelete('cascade');
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
        Schema::dropIfExists('pokemon');
    }
};
