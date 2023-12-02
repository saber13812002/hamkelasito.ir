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
        Schema::create('lili_models', function (Blueprint $table) {
            $table->id();

            $table->string("job_experience")->nullable();
            $table->string("skills")->nullable();
            $table->string("tattoo")->nullable();
            $table->string("job_experience_jpn")->nullable();
            $table->string("skills_jpn")->nullable();
            $table->string("tattoo_jpn")->nullable();
            $table->string("instagram_id")->nullable();
            $table->string("line_id")->nullable();
            $table->string("youtube")->nullable();
            $table->string("address")->nullable();
            $table->string("nearest_station")->nullable();
            $table->string("apartment")->nullable();
            $table->string("zipcode")->nullable();
            $table->string("state")->nullable();
            $table->string("weight")->nullable();
            $table->string("height")->nullable();
            $table->string("bust")->nullable();
            $table->string("waist")->nullable();
            $table->string("hips")->nullable();
            $table->string("shoes")->nullable();
            $table->string("hair_color_id")->nullable();
            $table->string("eye_color_id")->nullable();
            $table->string("bank_name")->nullable();
            $table->string("branch_name")->nullable();
            $table->string("account_no")->nullable();
            $table->string("account_name")->nullable();
            $table->string("account_classification_id")->nullable();
            $table->string("type_of_visa")->nullable();
            $table->string("valid_until")->nullable();
            $table->string("other")->nullable();
            $table->string("is_hybrid")->nullable();
            $table->string("is_artist")->nullable();
            $table->string("status")->nullable();
            $table->string("sort")->nullable();
            $table->string("created_at")->nullable();
            $table->string("updated_at")->nullable();
            $table->string("seen_at")->nullable();
            $table->string("is_show_follower_count")->nullable();
            $table->string("is_show_subscribe_count")->nullable();
            $table->string("deleted_at")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lili_models');
    }
};
