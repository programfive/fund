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
        Schema::create('daily_works', function (Blueprint $table) {
            $table->id();
            $table->string('hour_init');
            $table->string('hour_end');

            $table->unsignedBigInteger('child_id');
            $table->foreign('child_id')->references('id')->on('children');
            
            $table->unsignedBigInteger('job_id');
            $table->foreign('job_id')->references('id')->on('jobs');
            
            $table->unsignedBigInteger('comment_job_id');
            $table->foreign('comment_job_id')->references('id')->on('comment_jobs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daily_works');
    }
};