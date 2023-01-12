<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('address');
            $table->text('gmap');
            $table->string('phone');
            $table->string('email');
            $table->string('fb');
            $table->string('ig');
            $table->string('tt');
            $table->string('yt');
            $table->string('logo');
            $table->string('favicon');
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
        Schema::dropIfExists('identities');
    }
};
