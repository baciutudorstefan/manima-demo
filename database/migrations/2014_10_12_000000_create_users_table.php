<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image')->nullable(); // Add image column
            $table->string('color')->nullable(); // Add color column
            $table->rememberToken();
            $table->timestamps();
        });
    }
    // * @return void
    // */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};