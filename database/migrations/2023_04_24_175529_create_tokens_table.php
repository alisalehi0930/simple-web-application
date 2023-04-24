<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('token');
            $table->string('type');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tokens');
    }
};
