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
        Schema::create('inspections', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('keis_id');
            $table->foreign('keis_id')->references('id')->on('keis');
            $table->boolean('is_reviewed')->default(0);
            $table->string('decision')->nullable();
            $table->string('statement')->nullable();
            $table->string('type');
            $table->string('requested_by');
            $table->string('start_ts');
            $table->string('location');
            $table->json('check');
            $table->string('assigned_to');
            $table->foreign('assigned_to')->references('username')->on('users');
            $table->timestamps();

            

            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inspections');
    }
};
