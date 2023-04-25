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
        Schema::create('chefs_section_titles', function (Blueprint $table) {
            $table->id();
            $table->string('title_first');
            $table->string('title_last');
            $table->text('description');
            $table->boolean('visibility')->default(true);
            // $table->string('bg_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chefs_section_titles');
    }
};
