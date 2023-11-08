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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('member_id');

            $table->string('image_3x4');

            $table->string('image_large');
            $table->string('image_medium');
            $table->string('image_small');

            $table->string('video')->nullable();

            $table->text('description')->nullable();

            $table->integer('order')->nullable();

            $table->boolean('enable')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
