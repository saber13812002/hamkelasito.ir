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
        Schema::create('lili_users', function (Blueprint $table) {
            $table->id();

            $table->string("name")->nullable();
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("last_name_jpn")->nullable();
            $table->string("first_name_jpn")->nullable();
            $table->string("first_name_length")->nullable();
            $table->string("name_jpn")->nullable();
            $table->string("first_name_jpn_length")->nullable();
            $table->string("bio")->nullable();
            $table->string("bio_jpn")->nullable();
            $table->string("email")->nullable();
            $table->string("email_verified_at")->nullable();
            $table->string("model_verified_at")->nullable();
            $table->string("model_updated_unverified")->nullable();
            $table->string("model_updated_not_appended")->nullable();
            $table->string("cell_phone")->nullable();
            $table->string("city")->nullable();
            $table->string("country_id")->nullable();
            $table->string("ethnic_id")->nullable();
            $table->string("gender_id")->nullable();
            $table->string("birthday")->nullable();
            $table->string("corporate")->nullable();
            $table->string("unique_id")->nullable();
            $table->string("model_id")->nullable();
            $table->string("password")->nullable();
            $table->string("api_token")->nullable();
            $table->string("google_id")->nullable();
            $table->string("remember_token")->nullable();
            $table->string("created_at")->nullable();
            $table->string("updated_at")->nullable();
            $table->string("seen_at")->nullable();
            $table->string("is_model")->nullable();
            $table->string("age")->nullable();
            $table->string("deleted_at")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lili_users');
    }
};
