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
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->string('firstName',255);
            $table->string('lastName',255);
            $table->string('dateOfAdmission',45);
            $table->string('photo',90);
            $table->string('birthdate',45);
            $table->unsignedBigInteger('user_id')->nullable(); 
            $table->foreign('user_id')->references('id')->on('users')
            ->onDelete('set null')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('children');
    }
};