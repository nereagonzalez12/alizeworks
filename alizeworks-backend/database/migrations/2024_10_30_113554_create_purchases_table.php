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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->decimal('final_price', places: 2);
            $table->foreignId('user_id')->constrained(table: 'users', indexName: 'purchase_user_id')->onDelete('cascade');
            $table->foreignId('user_promotion_id')->constrained(table: 'user_promotions', indexName: 'purchase_user_promotion_id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
