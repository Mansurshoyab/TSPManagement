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
        Schema::create('course_infos', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('Course_subject');
            $table->string('trainer');
            $table->string('course_duretion');
            $table->date('start_date');
            $table->float('course_fee',10,2);
            $table->date('end_date');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_infos');
    }
};
