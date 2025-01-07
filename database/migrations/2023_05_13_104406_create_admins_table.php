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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('age');
            $table->string('specialization');
            $table->string('specialization_desc');
            $table->string('years_of_experience');
            $table->string('city');
            $table->string('country_of_graduation');
            $table->enum('gender', ['m', 'f']);
            $table->string('image_url')->nullable();
            $table->text('description')->nullable();
            $table->enum('type', ['doctor', 'admin']);
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
