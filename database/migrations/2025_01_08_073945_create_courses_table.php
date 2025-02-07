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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->foreignId('instructor_id')->constrained('users')->cascadeOnDelete();
            $table->string('thumbnail')->nullable();
            $table->decimal('price', 10,2)->default(0);
            $table->enum('level', ['beginner', 'intermediate', 'advanced', ])->default('beginner');
            $table->text('requirements')->nullable();
            $table->string('video_url')->nullable();
            $table->json('tags')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
