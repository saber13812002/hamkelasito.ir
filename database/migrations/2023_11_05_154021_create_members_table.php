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

            $table->bigInteger('user_id')->nullable();

            $table->string('profile_image')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->string('full_length_photo')->nullable();
            $table->string('other_photos')->nullable();

            $table->integer('no')->nullable();
            $table->string('name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('family')->nullable();
            $table->string('alias')->nullable();

            $table->string('first_name_furigana')->nullable();
            $table->string('last_name_furigana')->nullable();

            $table->string('stage_name')->nullable();
            $table->string('have_other_nationality')->nullable();
            $table->string('other_nationality')->nullable();
            $table->string('are_you_mixed')->nullable();
            $table->string('fathers_nationality')->nullable();
            $table->string('mothers_nationality')->nullable();

            $table->string('model_type')->nullable();
            $table->string('talent_type')->nullable();
            $table->string('actor_actress_type')->nullable();
            $table->string('extra_type')->nullable();
            $table->string('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->string('birhtday_year')->nullable();
            $table->string('birhtday_month')->nullable();
            $table->string('birhtday_day')->nullable();
            $table->string('nationality')->nullable()->default('Japan');

            $table->string('town')->nullable();

            $table->enum('type', ['japanese', 'mixed', 'international', 'N/A'])->default('N/A');

            $table->enum('model_categories', ['Artist', 'Model', 'N/A'])->default('N/A');
            $table->string('age')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('bust')->nullable();
            $table->string('waist')->nullable();
            $table->string('hips')->nullable();
            $table->string('shoe_size')->nullable();
            $table->string('shoe_size_unit')->nullable();
            $table->string('clothe_size')->nullable();
            $table->string('hair_color')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('language')->nullable()->default('ja');
            $table->string('native_language')->nullable()->default('ja');
            $table->json('other_language')->nullable();

            $table->string('instagram_page_follower_count')->nullable();
            $table->string('twitter_page_follower_count')->nullable();
            $table->string('facebook_page_follower_count')->nullable();
            $table->string('youtube_page_follower_count')->nullable();
            $table->string('linkedin_page_follower_count')->nullable();
            $table->string('tiktok_page_follower_count')->nullable();

            $table->text('biography')->nullable();

            $table->string('country_code')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('country')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->string('address')->nullable();
            $table->string('address_2')->nullable();

            $table->string('authentication_type')->nullable();
            $table->string('passport_photo')->nullable();
            $table->string('front_photo_drive_license_card')->nullable();
            $table->string('back_photo_drive_license_card')->nullable();
            $table->string('front_photo_insurance_card')->nullable();
            $table->string('back_photo_insurance_card')->nullable();
            $table->string('front_photo_my_number_card')->nullable();
            $table->string('back_photo_my_number_card')->nullable();
            $table->string('front_photo_residence_card')->nullable();
            $table->string('back_photo_residence_card')->nullable();

            $table->text('skills_text')->nullable();
            $table->json('skills')->nullable();
            $table->string('skill_tags')->nullable();

            $table->json('job_experiences')->nullable();


            $table->dateTime('published_at')->nullable();

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
