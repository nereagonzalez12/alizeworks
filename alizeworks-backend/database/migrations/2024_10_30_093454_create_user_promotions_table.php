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
        Schema::create('user_promotions', function (Blueprint $table) {
            $table->id();
            $table->timestamp('used_at')->nullable();
            $table->boolean('valid')->default(true);
            $table->foreignId('promotional_code_id')->constrained(table: 'promotional_codes', indexName: 'user_promotion_promotional_code_id')->onDelete('cascade');
            $table->foreignId('user_id')->constrained(table: 'users', indexName: 'user_promotion_user_id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_promotions');
    }
};
