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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->string('assignment_name');
            $table->text('description')->nullable();
            $table->dateTime('due_date');
            $table->foreignId('course_id')->constrained('courses')->cascadeOnDelete();
            $table->foreignID('user_id')->constrained('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations()
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
