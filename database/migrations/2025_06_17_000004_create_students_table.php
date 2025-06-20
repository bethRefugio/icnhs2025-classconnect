<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('students', function (Blueprint $table) {
          $table->id();
          $table->foreignId('user_id')->nullable()->constrained('users');
          $table->string('name', 100);
          $table->string('email')->nullable();
          $table->string('contact_no')->nullable();
          $table->string('LRN');
          $table->string('year_level');
          $table->foreignId('adviser_id')->nullable()->constrained('teachers');
          $table->foreignId('room_id')->nullable()->constrained('classrooms');
          $table->string('parent');
          $table->string('profile_pic')->nullable();
          $table->timestamps();
          $table->softDeletes($column = 'deleted_at', $precision = 0);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
