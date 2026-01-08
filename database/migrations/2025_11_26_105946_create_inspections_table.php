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
            $table->string('type');
            $table->string('requested_by');
            $table->string('start_ts');
            $table->string('location');
            $table->json('checks');
            $table->string('assigned_to')->nullable();
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
