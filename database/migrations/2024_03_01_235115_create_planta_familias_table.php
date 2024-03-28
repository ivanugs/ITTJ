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
            $table->string('scientific_name')->nullable();
            $table->string('common_name')->nullable();
            $table->string('family')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->text('type')->nullable();
            $table->timestamp('publication_date')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('planta_familias');
    }
};
