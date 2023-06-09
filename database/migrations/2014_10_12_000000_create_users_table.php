<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id' , true);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->boolean('email_verified_at')->nullable();
            $table->string('phone_number')->nullable();
            $table->boolean('phone_number_verified_at')->default(false);
            $table->string('password');
            $table->string('register_ip')->nullable();
            $table->string('activation_token')->nullable();
            $table->string('profile_image')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
