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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->text('text')->nullable();
            // Column is unsigned so it can't be < 0
            $table->unsignedTinyInteger('rating')->default(1);
            $table->foreignId('user_id')->constrained(table: 'users', indexName: 'rating_user_id')->onDelete('cascade');
            $table->foreignId('product_id')->constrained(table: 'products', indexName: 'rating_product_id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
