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
        Schema::create('temp_tables', function (Blueprint $table) {
            $table->id();

            $table->integer('step_id');
            $table->bigInteger('user_id')->default(1);
            $table->bigInteger('member_id')->default(1);

            $table->string('model_name')->default('Member');
            $table->string('model_field');
            $table->Enum('type', ['int', 'string', 'text', 'json', 'file'])->default('string');
            $table->string('value')->nullable();
            $table->text('text')->nullable();
            $table->json('json')->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->bigInteger('admin_id')->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temp_tables');
    }
};
