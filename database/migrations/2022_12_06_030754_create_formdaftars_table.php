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
        Schema::create('formdaftars', function (Blueprint $table) {
            $table->id();
            $table->string('grade_need');
            $table->string('name');
            $table->string('id_number');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('phone');
            $table->text('address');
            $table->string('school_before');
            $table->string('school_class_before');
            $table->string('parent_name');
            $table->string('parent_phone');
            $table->text('parent_address');
            $table->text('achievement');
            $table->text('quran_memorized');
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
        Schema::dropIfExists('formdaftars');
    }
};
