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
            $table->foreignId('role')->default(1)->constrained('roles')->cascadeOnDelete();
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
            $table->dropForeign(['role']);
            $table->dropColumn('date_of_birth');
            $table->dropColumn('department');
            $table->dropColumn('address');
            $table->dropColumn('hire_date');
        });
    }
};
