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
        Schema::create('about_pages', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title')->nullable();
            $table->string('hero_subtitle')->nullable();
            $table->string('hero_image')->nullable();

            $table->text('mission_title')->nullable();
            $table->text('mission_text')->nullable();
            $table->string('mission_image')->nullable();

            $table->json('features')->nullable();

            $table->json('history_items')->nullable();

            $table->text('production_title')->nullable();
            $table->text('production_text')->nullable();
            $table->string('production_image')->nullable();
            $table->json('production_steps')->nullable();

            $table->text('team_title')->nullable();
            $table->text('team_subtitle')->nullable();
            $table->json('team_members')->nullable();

            $table->json('certificates')->nullable();

            $table->text('cta_text')->nullable();
            $table->text('cta_button_text')->nullable();
            $table->string('cta_button_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_pages');
    }
};
