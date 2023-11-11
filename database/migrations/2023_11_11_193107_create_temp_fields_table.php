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
        Schema::create('temp_fields', function (Blueprint $table) {
            $table->id();

            $table->string('model_name')->default('Member');
            $table->string('model_field');
            $table->Enum('type', ['int', 'string', 'text', 'json'])->default('string');
            $table->dateTime('enabled_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temp_fields');
    }
};
