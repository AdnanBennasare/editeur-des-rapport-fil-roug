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
        Schema::create('document_image', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('presentation_id')->nullable();
            $table->unsignedBigInteger('rapport_id')->nullable();
            $table->unsignedBigInteger('image_id');   
            $table->foreign('presentation_id')->references('id')->on('presentations');
            $table->foreign('rapport_id')->references('id')->on('rapports');
            $table->foreign('image_id')->references('id')->on('images');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_image');
    }
};
