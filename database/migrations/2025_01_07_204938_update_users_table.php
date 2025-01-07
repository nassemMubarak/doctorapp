<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('national_id')->after('email');
            $table->enum('gender', ['male', 'female'])->after('national_id');
            $table->string('phone_number')->nullable()->after('gender');
            $table->string('address')->nullable()->after('phone_number');
            $table->string('identity_image')->nullable()->after('address');
            // Remove unnecessary fields if applicable
            $table->dropColumn(['mobile', 'birthday', 'status', 'diseases', 'image_url']);
        });
    }
    
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['national_id', 'gender', 'phone_number', 'address', 'identity_image']);
            $table->string('mobile')->nullable();
            $table->date('birthday')->nullable();
            $table->string('status')->nullable();
            $table->text('diseases')->nullable();
            $table->string('image_url')->nullable();
        });
    }
    };
