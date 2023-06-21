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
        Schema::create('klasmens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('club_id')->constrained('clubs')->onDelete('cascade'); 
            $table->integer('ma')->default(0); 
            $table->integer('me')->default(0); 
            $table->integer('s')->default(0); 
            $table->integer('k')->default(0); 
            $table->integer('gk')->default(0); 
            $table->integer('gm')->default(0); 
            $table->integer('point')->default(0); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('klasmens');
    }
};
