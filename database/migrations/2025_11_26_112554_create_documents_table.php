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
        Schema::create('documents', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('keis_id');
            $table->foreign('keis_id')->references('id')->on('keis');
            $table->string('filename');
            $table->string('mime_type');
            $table->string('category');
            $table->integer('pages');
            $table->string('uploaded_by');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
