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
        Schema::create('bankdetailmodels', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->integer('Card Number');
            $table->integer('EXP Month');
            $table->integer('EXP Year');
            $table->integer('CVV Number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bankdetailmodels');
    }
};
