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
        Schema::create('upload_books', function (Blueprint $table) {
            $table->id();
            $table->string('Book_Title');
            $table->string('Thumbnail');
            $table->string('PDF');
            $table->string('Description', 1000);
            $table->string('Author');
            $table->integer('Category');
            $table->foreign('Category')->on('id')->references('categories');
            $table->integer('Price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('upload_books');
    }
};
