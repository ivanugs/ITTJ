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
        Schema::create('planta_familias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('scientific_name');
            $table->string('common_name')->nullable();
            $table->string('family');
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('publication_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planta_familias');
    }
};
