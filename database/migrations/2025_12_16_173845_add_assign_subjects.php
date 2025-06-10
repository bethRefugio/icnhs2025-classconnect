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
        Schema::create('subject_teacher', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')->nullable()->constrained('subjects');
            $table->foreignId('teacher_id')->nullable()->constrained('teachers');
            $table->foreignId('building_id')->nullable()->constrained('buildings');
            $table->foreignId('room_id')->nullable()->constrained('classrooms');
            $table->string('vacant_time')->nullable();
            $table->string('vacant_day')->nullable();
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
        Schema::dropIfExists('subject_teacher');
    }
};
