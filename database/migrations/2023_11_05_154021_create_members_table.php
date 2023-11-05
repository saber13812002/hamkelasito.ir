<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();

            $table->string('profile_image');
            $table->string('thumbnail_image');

            $table->integer('no')->nullable();
            $table->string('name');
            $table->string('family');
            $table->string('alias')->nullable();

            $table->string('town');

            $table->enum('type', ['japanese', 'mixed', 'international', 'N/A'])->default('N/A');

            $table->enum('model_categories', ['Artist', 'Model', 'N/A'])->default('N/A');
            $table->string('age')->nullable();
            $table->string('height')->nullable();
            $table->string('bust')->nullable();
            $table->string('waist')->nullable();
            $table->string('hips')->nullable();
            $table->string('shoe_size')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('nationality')->nullable();
            $table->string('language')->nullable();

            $table->string('instagram_page_follower_count')->nullable();
            $table->string('twitter_page_follower_count')->nullable();
            $table->string('facebook_page_follower_count')->nullable();
            $table->string('youtube_page_follower_count')->nullable();
            $table->string('linkedin_page_follower_count')->nullable();
            $table->string('tiktok_page_follower_count')->nullable();

            $table->text('biography')->nullable();
            $table->text('skills')->nullable();
            $table->string('skill_tags')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
