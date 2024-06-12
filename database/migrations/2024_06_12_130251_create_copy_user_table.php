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
        Schema::create('copy_user', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('copy_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();

            $table->foreign('copy_id')->references('id')->on('copies')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('copy_user');
    }
};
