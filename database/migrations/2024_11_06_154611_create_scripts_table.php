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
        Schema::create('scripts', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('title'); // Store the title of the text
            $table->string('genre'); // Store the genre
            $table->string('language'); // Store the language
            $table->text('prompt'); // Store the user input prompt
            $table->text('generated_text'); // Store the generated text
            $table->timestamps(); // Store created_at and updated_at timestamps

            // Add foreign key constraint
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scripts');
    }
};
