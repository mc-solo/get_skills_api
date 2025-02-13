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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('phone_number');
            $table->string('email');
            $table->string('tx_ref');
            $table->decimal('amount', 10, 2);
            $table->string('currency')->default('ETB');
            $table->enum('status', ['pending', 'successful', 'failed'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
