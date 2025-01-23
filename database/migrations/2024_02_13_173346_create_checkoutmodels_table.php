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
        Schema::create('checkoutmodels', function (Blueprint $table) {
            $table->id();
            $table->integer('no_of_products');
            $table->integer('price');
            $table->integer('discount_couple');
            $table->integer('total');
            $table->unsignedBigInteger('category'); // Changed to unsignedBigInteger for foreign key reference
            $table->foreign('category')->references('id')->on('categories'); // Corrected foreign key definition
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkoutmodels');
    }
};
