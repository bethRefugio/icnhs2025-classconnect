<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('teachers', function (Blueprint $table) {
          $table->id();
          $table->foreignId('user_id')->nullable()->constrained('users'); // added by
          $table->foreignId('classroom_id')->nullable()->constrained('classrooms');
          $table->foreignId('building_id')->nullable()->constrained('buildings');
          $table->foreignId('department_id')->nullable()->constrained('departments');
          $table->string('first_name', 100);
          $table->string('last_name', 100);
          $table->string('gender', 10)->nullable();
          $table->string('email')->nullable();
          $table->string('mobile_no')->nullable();
          $table->string('telephone_no')->nullable();
          $table->string('profile_pic')->nullable();
          $table->string('grade', 10)->nullable();
          $table->string('section', 100)->nullable();
          $table->string('position', 30)->nullable();
          $table->string('facebook')->nullable();
          $table->string('twitter')->nullable();
          $table->string('instagram')->nullable();
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
