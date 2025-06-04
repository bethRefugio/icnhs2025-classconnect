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
          $table->foreignId('room_id')->nullable()->constrained('classrooms');
          $table->foreignId('department_id')->nullable()->constrained('departments');
          $table->string('name', 100);
          $table->string('email')->nullable();
          $table->string('contact_no')->nullable();
          $table->string('profile_pic')->nullable();
          $table->string('vacant_time', 10)->nullable();
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
