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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('role_id')->default('student')->constrained()->cascadeOnDelete();
            $table->date('date_of_birth')->nullable();  
            $table->string('department')->nullable();
            $table->string('address')->nullable();
            $table->date('hire_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role_id');
            $table->dropColumn('role_permissions_id');
            $table->dropColumn('Date of birth');
            $table->dropColumn('Department');
            $table->dropColumn('Address');
            $table->dropColumn('Hire date');
        });
    }
};
