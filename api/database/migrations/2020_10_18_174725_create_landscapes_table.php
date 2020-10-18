<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandscapesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landscapes', function (Blueprint $table) {
            $table->string('name');
            $table->string('phone');

            $table->string('email');
            $table->string('bio');
            $table->string('profile_picture');
            $table->json('album');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landscapes');
    }
}
